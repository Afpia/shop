<?php 
	require_once __DIR__ . '/php/helpers.php';

	$product = currentProduct($_GET['id']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Shop-single</title>
</head>
<body>
	<img src="<?php echo $product ['image']?>" alt="">
	<p><?php echo str_replace("_", " ", $product['name']);?></p>
	<p>$<?php echo $product['price'] ?>.00</p>
	<p>$<?php echo $product['price'] - $product['discountAmount'] ?>.00</p>
	<p><?php echo $product['discription'] ?></p>
</body>
</html>