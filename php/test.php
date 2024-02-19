<?php
require_once __DIR__ . '/helpers.php';

$DateOrder1 = new DateTime();
$DateOrder = new DateTime();
$DateGet = $DateOrder->add(new DateInterval('P1W'));
echo $DateOrder1->format('Y-m-d');
echo $DateGet->format('Y-m-d');
