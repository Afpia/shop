<?php
require_once __DIR__ . '/helpers.php';

$results = ProductSelect();

foreach (ProductSelect() as $row) {
    echo "ID: " . $row['id'] . ", Name: " . $row['name'] . ", Price: " . $row['price'] . "<br>";
}
