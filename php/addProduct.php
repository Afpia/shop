<?php 

require_once __DIR__ . '/helpers.php';

$name = $_POST['name'];
$categorie = $_POST['categorie'];
$price = $_POST['price'];
$image = $_FILES['image'];

if (empty($name) || empty($price) || empty($categorie) || empty($image['name'])) {
    if (empty($name)) {
        addValidationError(fieldName: 'name', message: 'Fill name');
    }
    if (empty($price)) {
        addValidationError(fieldName: 'price', message: 'Fill price');
    }
    if (empty($categorie)) {
        addValidationError(fieldName: 'categorie', message: 'Change category');
    }
    if (empty($image['name'])) {
        addValidationError(fieldName: 'image', message: 'Add image');
    }
}

if (preg_match('/[a-zA-Z]/', $price)) {
    addValidationError(fieldName: 'price', message: 'enter numbers only');
}


