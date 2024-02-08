<?php 
    require_once __DIR__ . '/helpers.php';
    unset ($_SESSION['cart']['product' .$_POST['itemToDelete']]);
    print_r($_SERVER);
    redirect($_SERVER['HTTP_REFERER']);  
