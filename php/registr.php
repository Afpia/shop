<?php

require_once  '/OSPanel/domains/shop/php/helpers.php';

$avatarPath = null;
$name = $_POST['name'] ?? null;
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;
$password_confirmation = $_POST['password_confirmation'] ?? null;
$avatar = $_FILES['avatar'] ?? null;

$_SESSION['validation'] = [];

if(empty($name)){
    addValidationError(fieldName:'name',message:'Пустое имя <br/>');   
};

if(!filter_var($email, filter:FILTER_VALIDATE_EMAIL)){
    
    addValidationError(fieldName:'email',message:'Указана неправильная почта<br> ');  

}

$user = findUser($email);
if($user){
    addValidationError(fieldName:'email',message:'Почта уже существует<br> ');
}


if(empty($password)){
    addValidationError(fieldName:'password',message:'Пароль пустой');   
};

if($password != $password_confirmation){
    addValidationError(fieldName:'password',message:'Не совпадают');   
};

if(!empty($avatar['name'])){

    $types = ['image/jpeg' , 'image/png'];

    if(!in_array($avatar['type'], $types)){
        addValidationError('avatar','Неверный тип изображения');
    }

    if(($avatar['size'] / 5000000) >= 1){
        addValidationError('avatar','Изображение больше 5 МБ');
    }

}

if (!empty($_SESSION['validation'])){
    addOldValues('name',$name);
    addOldValues('email',$email);
    redirect(path:'/signup.php');
};

if(!empty($avatar['name'])){
    $avatarPath = uploadFile($avatar,'avatar');
}

$pdo = getPDO();

$query = "INSERT INTO users (name, Email, avatar, password) VALUES (:name, :email, :avatar, :password)";

$params = [
    'name' => $name,
    'email' => $email,
    'avatar' => $avatarPath,
    'password' => password_hash($password, PASSWORD_DEFAULT)
];

$stmt = $pdo->prepare($query);

try {
    $stmt->execute($params);
} catch (\Exception $e) {
    die($e->getMessage());
}

redirect('/');