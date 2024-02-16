<?php

require_once  __DIR__ . '/helpers.php';

$avatarPath = null;
$name = $_POST['name'] ?? null;
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;
$password_confirmation = $_POST['password_confirmation'] ?? null;
$avatar = $_FILES['avatar'] ?? null;

$_SESSION['validation'] = [];

if (empty($name)) {
	addValidationError(fieldName: 'name', message: 'Blank name');
};
if (!filter_var($email, filter: FILTER_VALIDATE_EMAIL)) {

	addValidationError(fieldName: 'email', message: 'The email address is invalid.');
}

$user = findUser($email);

if ($user['status'] == 'active') {
	addValidationError(fieldName: 'email', message: 'The mail already exists');
}

if (empty($password)) {
	addValidationError(fieldName: 'password', message: 'Password is blank');
};

if ($password != $password_confirmation) {
	addValidationError(fieldName: 'password', message: 'Mismatch');
};

if (!empty($avatar['name'])) {

	$types = ['image/jpeg', 'image/png'];

	if (!in_array($avatar['type'], $types)) {
		addValidationError('avatar', 'Incorrect image type');
	}

	if (($avatar['size'] / 5000000) >= 1) {
		addValidationError('avatar', 'Image larger than 5 MB');
	}
}

if (!empty($_SESSION['validation'])) {
	addOldValues('name', $name);
	addOldValues('email', $email);
	redirect(path: '/signup.php');
};

if (!empty($avatar['name'])) {
	$avatarPath = uploadFile($avatar, 'avatar');
}

$pdo = getPDO();

$query = "INSERT INTO users (name, Email, avatar, password, status, role) VALUES (:name, :email, :avatar, :password, :status, :role)";

$params = [
	'name' => $name,
	'email' => $email,
	'avatar' => $avatarPath,
	'password' => password_hash($password, PASSWORD_DEFAULT),
	'status' => 'active',
	'role' => 1
];

$stmt = $pdo->prepare($query);

try {
	$stmt->execute($params);
} catch (\Exception $e) {
	die($e->getMessage());
}

$_SESSION['user']['id'] = findUser($email)['id'];
$_SESSION['user']['role'] = findUser($email)['role'];

redirect('/');
