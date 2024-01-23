
<?php 
	require_once '/OSPanel/domains/shop/php/helpers.php';
?>

<!DOCTYPE html>
<html lang="en" data-theme="light">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Sign on</title>
		<link rel="icon" href="" />
		<link rel="stylesheet" href="../assets/reset.css" />
		<link rel="stylesheet" href="../assets/signup.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:wght@400;700;900&family=Yellowtail&display=swap"
			rel="stylesheet"
		/>
	</head>
	<body>
		<div class="wrapper">
			<header>
				<div class="header__inner">
					<div class="header__logo">
						<a href="./index.html">
							<img src="../img/Logo.svg" alt="" />
						</a>
					</div>
					<nav class="nav roboto-bold">
						<ul>
							<a href="./index.html"><li>Home</li></a>
							<a href=""><li>About</li></a>
							<a href=""><li>Pages</li></a>
							<a href=""><li>Shop</li></a>
							<a href=""><li>Projects</li></a>
							<a href="./login.html"><li>Log in</li></a>
						</ul>
					</nav>
					<div class="header__right">
						<div class="input">
							<input type="text" />
							<a href=""><img src="../img/Search Icon.svg" alt="" /></a>
						</div>
						<button class="roboto-bold">
							<img src="../img/Cart Icon.svg" alt="" />
							<p>Cart (0)</p>
						</button>
					</div>
				</div>
			</header>
		</div>
		<div class="wrapper">
			<form class="card" method="post" action="/php/registr.php" enctype="multipart/form-data">
				<h2>Регистрация</h2>
				<label for="name">
					Имя
					<input
						type="text"
						id="name"
						name="name"
						placeholder="Иванов Иван"
						<?php mayBeHasError(fieldName:'name') ?>
					/>

					<?php ErrorWarning(fieldName:'name'); ?>

				</label>
				<label for="email">
					E-mail
					<input
						type="text"
						id="email"
						name="email"
						placeholder="ivan@areaweb.su"
						
					/>
				</label>
				<label for="avatar"
					>Изображение профиля
					<input type="file" id="avatar" name="avatar" />
				</label>
				<div class="grid">
					<label for="password">
						Пароль
						<input
							type="password"
							id="password"
							name="password"
							placeholder="******"
							
						/>
					</label>
					<label for="password_confirmation">
						Подтверждение
						<input
							type="password"
							id="password_confirmation"
							name="password_confirmation"
							placeholder="******"
							
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
			<p class="have__acc">
				У меня уже есть<a href="./login.html"> аккаунт</a>
			</p>
		</div>
		<script src="../assets/button.js"></script>
	</body>
</html>
