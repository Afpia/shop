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
	<div class="brightness"></div>
	<div class="root">
		<div class="wrapper">
			<?php include_once __DIR__ . '/components/header.php' ?>
		</div>
		<section class='profile'>
			<div class='wrapper'>
				<div class="profile__main">
					<div class="profile__info-main">
						<div class="profile__avatar">
							<img src="<?php echo $user['avatar'] ?>">
						</div>
						<p class="username"><?php echo $user['name'] ?></p>
						<p class="email">Customer</p>
						<button class="profile__edit" id="modal-button">Edit Profile</button>
						<form action="/php/logout.php" class="profile__exit">
							<button><img src="./img/exit.svg" alt="exit"></button>
						</form>
					</div>
					<div class="profile__address">
					</div>
				</div>
				<div class="profile__footer">
					<div class="profile__history">
						<div class="profile__header">
							<h2>Recet Order History</h2>
							<button>View All</button>
						</div>
						<div class="profile__column">
							<p>Order ID</p>
							<p>DATE</p>
							<p>TOTAL</p>
							<p>STATUS</p>
						</div>
						<div class="profile__order">
							<p>#323</p>
							<p>8 Sep, 2023</p>
							<p>$135.00 (5 Products)</p>
							<p>Processing</p>
						</div>
					</div>
				</div>

			</div>
		</section>
		<div class="modal" id="modal">
			<div class="modal__inner">
				<button class="modal-esc" id="modal-esc">
					<span></span>
					<span></span>
				</button>
				<h2>Edit Profile</h2>
				<form action="/php/cart.php" method="post" enctype="multipart/form-data">
					<label for="name" style="position: relative;">
						Name
						<input type="text" id="name" name="name" value="<?php echo $user['name'] ?>" />
					</label>
					<label for="email" style="position: relative;">
						E-mail
						<input type="text" id="email" name="email" value="<?php echo $user['Email'] ?>" />
						<?php if (hasValidationError(fieldName: 'email')) : ?>
							<span class="i-email"><?php ErrorWarning(fieldName: 'email'); ?></span>
						<?php endif; ?>
					</label>
					<div class="modal__footer">
						<div class="modal__avatar">
							<p>Avatar</p>
							<div class="profile__avatar-edit">
								<input type="file" id="image" accept="image/png, image/jpeg" name="avatar">
								<img src="<?php echo $user['avatar'] ?>">
							</div>
						</div>
						<div class="grid">
							<label for="password" style="position: relative;">
								Password
								<input type="password" id="password" name="password" placeholder="******" <?php mayBeHasError(fieldName: 'password') ?> />
								<?php if (hasValidationError(fieldName: 'password')) : ?>
									<div class="i-password"><?php ErrorWarning(fieldName: 'password'); ?></div>
								<?php endif; ?>
							</label>
							<label for="password_confirmation">
								Confirm password
								<input type="password" id="password_confirmation" name="password_confirmation" placeholder="******" <?php mayBeHasError(fieldName: 'password') ?> />
							</label>
						</div>
					</div>
					<input type="submit" id="submit" value="Confirm"></input>
				</form>
			</div>
		</div>
	</div>
</body>
<script src="./assets/profile.js"></script>

</html>