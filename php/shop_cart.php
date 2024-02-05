<?php

    require_once __DIR__ . '/helpers.php';

    $product = (currentProduct($_POST['product']));

    $cart['count'] = $_POST['count'];
    $cart['id'] = $product['id'];

    $_SESSION['cart']['product'. count($_SESSION['cart'])+1] = 12;
    print_r($_SESSION['cart']);
    count($_SESSION['cart']);

    