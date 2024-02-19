<?php 

require_once __DIR__ . '/helpers.php';

if($_SESSION['user']['role'] != 2){
    redirect('/');
}

$imagePath = null;
$name = $_POST['name'] ?? null;
$categorie = $_POST['categorie'] ?? null;
$categories = $_POST['categories'] ?? null;
$price = $_POST['price'] ?? null;
$image = $_FILES['image'] ?? null;
$Discount = $_POST['Discount'] ?? 0;
$Description = $_POST['description'] ?? null;

$_SESSION['validation'] = [];

if (empty($name) || empty($price) || empty($image['name']) || empty($Description)) {
    if (empty($name)) {
        addValidationError(fieldName: 'name', message: 'Fill name');
    }
    if (empty($price)) {
        addValidationError(fieldName: 'price', message: 'Fill price');
    }
    if (empty($image['name'])) {
        addValidationError(fieldName: 'image', message: 'Add image');
    }
    if (empty($Description)) {
        addValidationError(fieldName: 'Description', message: 'Fill description');
    }
}

if (empty($categorie) && empty($categories)) {
    addValidationError(fieldName: 'categorie', message: 'Change category');
}

if (preg_match('/[a-zA-Z]/', $price)) {
    addValidationError(fieldName: 'price', message: 'enter numbers only');
}

if (!empty($_SESSION['validation'])) {
	addOldValues('name', $name);
	addOldValues('categories', $categories);
    addOldValues('price', $price);
	addOldValues('image', $image);
	addOldValues('Description', $Description);
	redirect(path: '/profile.php');
};

$imagePath = uploadFile($image, 'image');

if(!empty($categories)){

    $categ = findCategory($categories);

    if($categ){

        $categorie = $categ['ID'];

    }else{

    $pdo = getPDO();

    $query = "INSERT INTO Categories (Categ_name) VALUES (:Categ_name)";
    
    $params = [
        'Categ_name' => $categories
    ];
    
    $stmt = $pdo->prepare($query);
    
    try {
        $stmt->execute($params);
    } catch (\Exception $e) {
        die($e->getMessage());
    }

        $categorie = findCategory($categories)['ID'];
    }
    
}

$pdo = getPDO();

    $query = "INSERT INTO product (name, image, rating, price, discountAmount, discription, categoryID) VALUES (:name, :image, :rating, :price, :discountAmount, :discription, :categoryID)";
    
    $params = [
        'name' => $name,
        'image' => $imagePath,
        'rating' => 5,
        'price' => $price,
        'discountAmount' => $Discount,
        'discription' => $Description,
        'categoryID' => $categorie
    ];
    
    $stmt = $pdo->prepare($query);
    
    try {
        $stmt->execute($params);
    } catch (\Exception $e) {
        die($e->getMessage());
    }

    redirect('/shop.php');

