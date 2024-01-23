<?php

require_once  '/OSPanel/domains/shop/php/helpers.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirmation = $_POST['password_confirmation'];

$_SESSION['validation'] = [];

if(empty($name)){
        $_SESSION['validation']['name'] = 'неверное имя <br /> <br />';   
};

if (!empty($_SESSION['validation'])){
    redirect(path:'/signup.php');
};
