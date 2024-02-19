<?php 

require_once __DIR__ . '/helpers.php';

$avatarPath = null;
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

if (!empty($_SESSION['validation'])) {
	addOldValues('name', $name);
	addOldValues('categorie', $categorie);
    addOldValues('price', $price);
	addOldValues('image', $image);
	redirect(path: '/profile.php');
};

$avatarPath = uploadFile($image, 'image');

$pdo = getPDO();

    $query = "INSERT INTO product (name, image, rating, price, discription, categoryID) VALUES (:name, :image, :price, :age, :date, :id_ganer, :ticket)";
    
    $params = [
        'name' => $name,
        'image' => $imagePath,
        'price' => $price,
        'age' => $age,
        'date' => $date,
        'id_ganer' => $id_ganer,
        'ticket' => $ticket,
    ];
    
    $stmt = $pdo->prepare($query);
    
    try {
        $stmt->execute($params);
    } catch (\Exception $e) {
        die($e->getMessage());
    }

