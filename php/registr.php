<?php

require_once '/helpers.php';

$name = $_POST(['name']);
$email = $_POST(['email']);
$password = $_POST(['password']);
$name = $_POST(['password_confirmation']);

$_SESSION['validation'] = [];

if(empty($name)){
    $_SESSION['validation'] = [
        $_SESSION['validation']['name'] = 'неверное имя'
    ];
}
if (!empty($_SESSION['validation'])){
    rederict(path:'/registr.php');
}


