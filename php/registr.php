<?php

require_once  '/OSPanel/domains/shop/php/helpers.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirmation = $_POST['password_confirmation'];

$_SESSION['validation'] = [];

addOldValues('name',$name);
addOldValues('email',$email);

if(empty($name)){
    
    addValidationError(fieldName:'name',message:'Пустое имя <br/>');   
    
};



if(!filter_var($email, filter:FILTER_VALIDATE_EMAIL)){
    
    addValidationError(fieldName:'email',message:'Указана неправильная почта<br> ');  
}

if(empty($password)){
    addValidationError(fieldName:'password',message:'Пароль пустой');   
};

if($password != $password_confirmation){
    addValidationError(fieldName:'password',message:'Не совпадают');   
};

if (!empty($_SESSION['validation'])){
    redirect(path:'/signup.php');
};

print_r($_SESSION);