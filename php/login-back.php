<?php

require_once __DIR__ . '/helpers.php';

$email = $_POST['email'] ?? null;
$password = $_POST['password-auth'] ?? null;

addOldValues('email', $email);

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {

	addValidationError('email', 'Validation Error'); 
	addValidationError('email', 'The email address is invalid.');
	redirect('/login.php');
}

$user = findUser($email);

if (!$user) {
	addValidationError('email', "User not found");
	redirect('/login.php');
}
if (!password_verify($password, $user['password'])) {
	addValidationError('password', 'Incorrect password');
	redirect('/login.php');
}

$_SESSION['user']['id'] = $user['id'];

redirect('/profile.php');
