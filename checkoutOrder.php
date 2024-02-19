<?php
require_once __DIR__ . '/php/helpers.php';

if (empty($_SESSION['cart'])) {
	redirect($_SERVER['HTTP_REFERER']);
}

$sum = 0;
$DateOrder = new DateTime();
$DateOrder1 = new DateTime();
$DateGet = $DateOrder->add(new DateInterval('P1W'));
foreach ($_SESSION['cart'] as $row) {
	$productOrder = ProductSelectOne($row['id']);
	$sum += $row['count'] * ($productOrder['0']['price'] - $productOrder['0']['discountAmount']);
}


$pdo = getPDO();

$query = "INSERT INTO Orders (ID_user, DateOrder, DateGet, Price) VALUES (:ID_user, :DateOrder, :DateGet, :Price)";

$params = [
	'ID_user' => $_SESSION['user']['id'],
	'DateOrder' => $DateOrder1->format('Y-m-d'),
	'DateGet' => $DateGet->format('Y-m-d'),
	'Price' => $sum
];

$stmt = $pdo->prepare($query);

try {
	$stmt->execute($params);
	$lastInsertedId = $pdo->lastInsertId();
} catch (\Exception $e) {
	die($e->getMessage());
}

foreach ($_SESSION['cart'] as $row) {
	$query = "INSERT INTO ListOrder (ID_jewel, ID_order, count) VALUES (:ID_jewel, :ID_order, :count)";

	$params = [
		'ID_jewel' => $row['id'],
		'ID_order' => $lastInsertedId,
		'count' => $row['count']
	];

	$stmt = $pdo->prepare($query);

	try {
		$stmt->execute($params);
	} catch (\Exception $e) {
		die($e->getMessage());
	}
}
unset($_SESSION['cart']);

// redirect($_SERVER['HTTP_REFERER']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Order</title>
	<link rel="icon" href="./img/favicon.png" />
	<link rel="stylesheet" href="../assets/reset.css" />
	<link rel="stylesheet" href="../assets/profile.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:wght@400;700;900&family=Yellowtail&display=swap" rel="stylesheet" />
</head>

<body class="body">
	<div class="brightness"></div>
	<div class="root">
		<div class="wrapper">
			<?php include_once __DIR__ . '/components/header.php' ?>
		</div>
		<div class="done">
			<p>Order Completed</p>
		</div>
	</div>
	</div>
</body>