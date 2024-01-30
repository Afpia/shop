<?php
require_once __DIR__ . '/php/helpers.php';

checkAuth();

$user = currentUser();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profile</title>
	<link rel="icon" href="./img/favicon.png" />
	<link rel="stylesheet" href="./assets/reset.css" />
	<link rel="stylesheet" href="./assets/profile.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:wght@400;700;900&family=Yellowtail&display=swap" rel="stylesheet" />
</head>

<body class="body">
	<div class="root">
		<div class="wrapper">
			<?php include_once __DIR__ . '/components/header.php' ?>
		</div>
		<section class='profile'>
			<div class='wrapper'>
				<div class="profile__inner">
					<div class="profile__avatar">
						<img src="<?php echo $user['avatar'] ?>" alt="">
					</div>
					<p class="username"><?php echo $user['name'] ?></p>
					<p class="email"></span><?php echo $user['Email'] ?></p>
					<form action="/php/logout.php">
						<button>Выйти из аккаунта</button>
					</form>
				</div>
			</div>
		</section>
	</div>
</body>
<script src="./assets/index-shop.js"></script>

</html>