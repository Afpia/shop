
<?php 
	require_once '/OSPanel/domains/shop/php/helpers.php';
	checkGuest();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Sign on</title>
		<link rel="icon" href="" />
		<link rel="stylesheet" href="./assets/reset.css" />
		<link rel="stylesheet" href="./assets/signup.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:wght@400;700;900&family=Yellowtail&display=swap"
			rel="stylesheet"
		/>
	</head>
	<body>
		<div class="wrapper">
		<?php include_once __DIR__ . '/components/header.php' ?>
		</div>
		<div class="wrapper">
			<form class="card" method="post" action="/php/registr.php" enctype="multipart/form-data">
				<h2>Регистрация</h2>
				<label for="name" style="position: relative;">
					Имя
					<input
						type="text"
						id="name"
						name="name"
						placeholder="Иванов Иван"
						value="<?php echo old('name') ?>"
						<?php mayBeHasError(fieldName:'name') ?>
					/>
					<?php if(hasValidationError(fieldName:'name')): ?>
						<div class="i-name"><?php ErrorWarning(fieldName:'name'); ?></div>
					<?php endif; ?>

				</label>
				<label for="email" style="position: relative;">
					E-mail
					<input
						type="text"
						id="email"
						name="email"
						placeholder="ivan@areaweb.su"
						value="<?php echo old('email') ?>"
						<?php mayBeHasError(fieldName:'email') ?>
					/>
					<?php if(hasValidationError(fieldName:'email')): ?>
						<div class="i-email"><?php ErrorWarning(fieldName:'email'); ?></div>
					<?php endif; ?>
				</label>
				<label for="avatar"
					>Изображение профиля
					<input type="file" id="avatar" name="avatar" />
					
				</label>
				<div class="grid">
					<label for="password" style="position: relative;">
						Пароль
						<input
							type="password"
							id="password"
							name="password"
							placeholder="******"
							<?php mayBeHasError(fieldName:'password') ?>
						/>
						<?php if(hasValidationError(fieldName:'password')): ?>
						<div class="i-password"><?php ErrorWarning(fieldName:'password'); ?></div>
					<?php endif; ?>
					</label>
					<label for="password_confirmation">
						Подтверждение
						<input
							type="password"
							id="password_confirmation"
							name="password_confirmation"
							placeholder="******"
							<?php mayBeHasError(fieldName:'password') ?>
						/>
					</label>
				</div>
				<fieldset>
					<label for="terms" class="checkbox">
						<input type="checkbox" id="terms" name="terms" />
						<span type="checkbox" id="terms" name="terms"></span>
						Я принимаю все условия пользования
					</label>
				</fieldset>
				<button type="submit" id="submit" disabled>Продолжить</button>
			</form>
			<?php clearValidation() ?>
			<p class="have__acc">
				У меня уже есть<a href="./login.php"> аккаунт</a>
			</p>
		</div>
		<script src="./assets/button.js"></script>
	</body>
</html>
