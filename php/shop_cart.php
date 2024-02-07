<?php

    require_once __DIR__ . '/helpers.php';

    checkAuth();

    $product = currentProduct($_POST['product']);

    $cart = [];
    $cart['count'] = $_POST['count'];
    $cart['id'] = $product['id'];

    if(empty($_SESSION['cart'])){
        $_SESSION['cart'] = [];
    }

    if(isset($_SESSION['cart']['product'.$product['id']])) {
        $_SESSION['cart']['product'.$product['id']]['count'] += $_POST['count'];
    } else {
        $_SESSION['cart']['product'.$product['id']] = $cart;
    }

    print_r($_SESSION['cart']);


        