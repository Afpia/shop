<?php require_once __DIR__ . '/php/helpers.php'; ?>

<!DOCTYPE html>
<html lang="ru" data-theme="light">
	<head>
		<meta charset="UTF-8" />
		<title>Log in</title>
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
							<a href="./index.php"><li>Home</li></a>
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
		<form method="post" action="/php/logIn.php" class="card">
			<h2>Вход</h2>
			<label for="email">
				E-mail
				<input
					type="text"
					id="email"
					name="email"
					placeholder="ivan@areaweb.su"
					value="<?php echo old('email') ?>"
						<?php mayBeHasError(fieldName:'email') ?>
				/>
			</label>
			<?php if(hasValidationError(fieldName:'email')): ?>
						<div class="i-email"><?php ErrorWarning(fieldName:'email'); ?></div>
					<?php endif; ?>
			<label for="password-auth">
				Пароль
				<input
					type="password-auth"
					id="password-auth"
					name="password-auth"
					placeholder="******"
					<?php mayBeHasError(fieldName:'password') ?>
				/>
				<?php if(hasValidationError(fieldName:'password')): ?>
						<div class="i-password"><?php ErrorWarning(fieldName:'password'); ?></div>
					<?php endif; ?>
			</label>
			<button type="submit" id="submit">Продолжить</button>
		</form>
		<p class="have__acc">У меня еще нет <a href="./signup.php">аккаунта</a></p>
		<script src="assets/app.js"></script>
	</body>
</html>
