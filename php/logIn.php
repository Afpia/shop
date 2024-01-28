<?php

require_once __DIR__ . '/helpers.php';

$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;

addOldValues('email', $email);

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    
    addValidationError('email', 'Неверный формат электронной почты');
    addValidationError('email', 'Ошибка валидации'); 
    redirect('/login.php');
}

$user = findUser($email);

if (!$user) {
    addValidationError('password', "Пользователь $email не найден");
    redirect('/login.php');
}

if (!password_verify($password, $user['password'])) {
    addValidationError('password', 'Неверный пароль');
    redirect('/login.php');
}

$_SESSION['user']['id'] = $user['id'];

redirect('/');