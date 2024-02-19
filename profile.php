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
	<link type="image/x-icon" rel="shortcut icon" href="./img/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="./img/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./img/favicon-16x16.png">
	<link type="image/png" sizes="192x192" rel="icon" href="./img/android-icon-192x192.png">
	<link type="image/png" sizes="192x192" rel="icon" href="./img/android-icon-192x192.png">
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
							<button><img src="./img/exit.svg" alt="exit" title="Выйти"></button>
						</form>
					</div>
					<!-- admin -->
					<?php
					if ($_SESSION['user']['role'] == 2) {
						echo
						'
						<div class="new-product-main">
						<h2 class="new-product">New Product</h2>
						<form action="/php/addProduct.php" method="POST" enctype="multipart/form-data">
							<div class="new-product__header">
								<div class="new-product__name">
									<p class="new-product__title">Name:</p>
									<input name="name" type="text" class="new-product__input-name value="' . old('name') . '">
								</div>
								<div class="new-product__picture">
									<p class="new-product__title">Picture:</p>
									<input type="file" name="image" accept="image/png, image/jpeg" class="new-product__input-file">
								</div>
							</div>
							<div class="new-product__header">
								<div class="new-product__categories">
									<p class="new-product__title">Categories:</p>
									<select name="categorie" class="new-product__input" require>
										<option value="Pick Categories" selected disabled>Select</option>';
						foreach (CategSelect() as $row) {
							echo '
										<option value="' . $row['ID'] . '">' . $row['Categ_name'] . '</option>
											';
						}
						echo '
									</select>
								</div>
								<div class="new-product__categories">
									<p class="new-product__title" name="categories">New category:</p>
									<input name="categories" type="text" class="new-product__input-name value="' . old('categories') . '" >
								</div>
							</div>
							<div class="new-product__header">
								<div class="new-product__price">
									<p class="new-product__title">Price:</p>
									<input name="price" type="number" class="new-product__input-price value="' . old('price') . '"">
								</div>
								<div class="new-product__discount">
									<p class="new-product__title">Discount:</p>
									<input name="Discount" type="number" class="new-product__input-price value="' . old('Discount') . '"">
								</div>
							</div>
							<div class="new-product__description">
								<p class="new-product__title">Description:</p>
								<textarea name="description" class="new-product__textarea" value="' . old('Description') . '"  placeholder="Description Product" required></textarea>
							</div>
							<input type="submit" value="Confirm" class="new-product__submit"></input>
						</form>
					</div>
						';
					}
					?>


				</div>
				<?php if($_SESSION['user']['role'] != 2) {
					echo '
				
				<div class="profile__footer">
					<div class="profile__history">
						<div class="profile__header">
							<h2>Recet Order History</h2>
							<button class="view-all">View All</button>
						</div>
						<div class="profile__column">
							<p>Date order</p>
							<p>Date get</p>
							<p>TOTAL</p>
							<p>STATUS</p>
						</div>';
						
						foreach (currentOrder() as $ord) {
							echo '
							<div class="profile__order">
								<p>' . $ord['DateOrder'] . '</p>
								<p>' . $ord['DateGet'] . '</p>
								<p>$' . $ord['Price'] . '.00 (' . CountSumm($ord['ID']) . ' Products)</p>
								<p>' . currentDelivered($ord['DateGet']) . '</p>
							</div>';
						}
						}
						?>
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
				<div class="delete"><a href="/php/delieteProfile.php" class="delete-profile">Удалить профиль</a></div>
			</div>
		</div>
	</div>
</body>
<script src="./assets/profile.js"></script>

</html>