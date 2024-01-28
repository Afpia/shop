<?php
require_once __DIR__ . '/php/helpers.php';
checkGuest();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<title>Log in</title>
	<link rel="icon" href="" />
	<link rel="stylesheet" href="./assets/reset.css" />
	<link rel="stylesheet" href="./assets/login.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:wght@400;700;900&family=Yellowtail&display=swap" rel="stylesheet" />
</head>

<body>
	<div class="wrapper">
		<?php include_once __DIR__ . '/components/header.php' ?>
	</div>
	<form method="post" action="./php/logIn.php" class="card">
		<h2>Log in to your account</h2>
		<label for="email" style="position: relative;">
			E-mail
			<input type="text" id="email" name="email" placeholder="ivan@areaweb.su" value="<?php echo old('email') ?>" <?php mayBeHasError(fieldName: 'email') ?> />
			<?php if (hasValidationError(fieldName: 'email')) : ?>
				<div class="i-email"><?php ErrorWarning(fieldName: 'email'); ?></div>
			<?php endif; ?>
		</label>
		<label for="password-auth">
			Password
			<input type="password-auth" id="password-auth" name="password-auth" placeholder="******" <?php mayBeHasError(fieldName: 'password') ?> />
			<?php if (hasValidationError(fieldName: 'password')) : ?>
				<div class="i-password"><?php ErrorWarning(fieldName: 'password'); ?></div>
			<?php endif; ?>
		</label>
		<button type="submit" id="submit">Log in</button>
	</form>
	<p class="have__acc">Don't have an account? <a href="./signup.php">Sign up</a></p>
</body>

</html>