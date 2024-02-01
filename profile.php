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
				<div class="profile__main">
					<div class="profile__info-main">
						<div class="profile__avatar">
							<img src="<?php echo $user['avatar'] ?>" alt="avatar">
						</div>
						<p class="username"><?php echo $user['name'] ?></p>
						<p class="email">Customer</p>
						<button class="profile__edit" id="modal-button">Edit Profile</button>
					</div>
					<div class="profile__address">
					</div>
				</div>
				<form action="/php/logout.php">
					<button>Log out</button>
				</form>
			</div>
		</section>
		<div class="modal" id="modal">
			<div class="modal__inner">
				<button class="modal-esc" id="modal-esc">
					<span></span>
					<span></span>
				</button>
				<h2>Edit Profile</h2>

				<label for="name" style="position: relative;">
					Name
					<input type="text" id="name" name="name" value="<?php echo $user['name'] ?>" />
					<?php if (hasValidationError(fieldName: 'name')) : ?>
						<div class="i-name"><?php ErrorWarning(fieldName: 'name'); ?></div>
					<?php endif; ?>
				</label>
				<label for="email" style="position: relative;">
					E-mail
					<input type="text" id="email" name="email" value="<?php echo $user['Email'] ?>" <?php mayBeHasError(fieldName: 'email') ?> />
					<?php if (hasValidationError(fieldName: 'email')) : ?>
						<div class="i-email"><?php ErrorWarning(fieldName: 'email'); ?></div>
					<?php endif; ?>
				</label>
				<div class="profile__avatar-edit">

					<input type="file" id="image" alt="image" accept="image/png, image/jpeg">
					<img src="<?php echo $user['avatar'] ?>" alt="avatar">
				</div>
				<button type="submit" id="submit" disabled>Confirm</button>
			</div>
		</div>
	</div>
</body>
<script src="./assets/profile.js"></script>

</html>