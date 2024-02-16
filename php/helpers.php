<?php

session_start();

require_once __DIR__ . '/config.php';

function redirect(string $path)
{
	header(header: "Location:$path");
	die();
}

function clearValidation()
{
	$_SESSION['validation'] = [];
}

function hasValidationError(string $fieldName): bool
{
	return isset($_SESSION['validation'][$fieldName]);
}

function addValidationError(string $fieldName, string $message)
{
	$_SESSION['validation'][$fieldName] = $message;
}

function hasMessage(string $key): bool
{
	return isset($_SESSION['message'][$key]);
}

function mayBeHasError(string $fieldName)
{
	echo isset($_SESSION['validation'][$fieldName]) ? 'class="error-red" ' : '';
}

function ErrorWarning(string $fieldName)
{
	$message = $_SESSION['validation'][$fieldName] ?? '';
	unset($_SESSION['validation'][$fieldName]);
	echo $message;
}

function addOldValues(string $key, mixed $value)
{
	$_SESSION['old'][$key] = $value;
}

function old(string $key)
{
	$value = $_SESSION['old'][$key] ?? '';
	unset($_SESSION['old'][$key]);
	return $value;
}

function uploadFile(array $file, string $prefix = '')
{
	$uploadPath = __DIR__ . '/../uploads';

	if (!is_dir($uploadPath)) {
		mkdir($uploadPath, 0777, true);
	}

	$ext = pathinfo($file['name'], PATHINFO_EXTENSION);
	$fileName = $prefix . '_' . time() . ".$ext";

	$path = "$uploadPath/$fileName";

	if (!move_uploaded_file($file['tmp_name'], $path)) {
		die('ошибка при загрузке файла');
	}

	return "uploads/$fileName";
}

function getPDO()
{
	try {
		return new \PDO('mysql:host=' . DB_HOST . ';charset=utf8;dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
	} catch (\PDOException $e) {
		die("Connection error: {$e->getMessage()}");
	}
}

function getMySQL()
{
	$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
	if (!$conn) {
		die("Ошибка " . mysqli_connect_error());
	};
	return $conn;
}

function findUser(string $email): array|bool
{
	$pdo = getPDO();

	$stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email AND status = :status");
	$stmt->execute(['email' => $email , 'status' => 'active']);
	return $stmt->fetch(\PDO::FETCH_ASSOC);
}

	function currentUser(): array|false
	{
		$pdo = getPDO();

		if (!isset($_SESSION['user'])) {
			return false;
		}

		$userId = $_SESSION['user']['id'] ?? null;

		$stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
		$stmt->execute(['id' => $userId]);
		return $stmt->fetch(\PDO::FETCH_ASSOC);
	}

function currentOrder(): array|false
{
	$pdo = getPDO();

	$userId = $_SESSION['user']['id'] ?? null;

	$stmt = $pdo->prepare("SELECT * FROM Orders WHERE ID_user = :id Order BY DateOrder DESC");
	$stmt->execute(['id' => $userId]);
	return $results = $stmt->fetchAll(\PDO::FETCH_ASSOC);
}

function ProductSelect()
{
	$pdo = getPDO();
	$stmt = $pdo->prepare("SELECT * FROM product");
	$stmt->execute();
	return $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function currentDelivered ($DateGet){
	$today = strtotime(date('Y-m-d')); 
    $input_date = strtotime($DateGet); 
    if ($input_date <= $today) {
        return 'delivered';
    } else {
        return 'Processing';
    };
};


function CountSumm($id)
{
	$pdo = getPDO();

	$stmt = $pdo->prepare("SELECT SUM(count) AS sum_of_columns FROM ListOrder WHERE ID_order =:id ");
	$stmt->execute(['id' => $id]);
	return $stmt->fetchColumn();
}
function logout(): void
{
	unset($_SESSION['user']['id']);
	unset($_SESSION['user']['role']);
	redirect('/');
}

function checkAuth(): void
{
	if (!isset($_SESSION['user']['id'])) {
		redirect('/login.php');
	}
}

function checkGuest()
{
	if (isset($_SESSION['user']['id'])) {
		redirect('/profile.php');
	}
}

function currentProduct($id)
{
	$pdo = getPDO();
	$stmt = $pdo->prepare("SELECT * FROM product WHERE id = :id");
	$stmt->execute(['id' => $id]);
	return $stmt->fetch(\PDO::FETCH_ASSOC);
};

function drowStars($rating)
{
	$masage = '';
	for ($i = 1; $i <= $rating; $i++) {
		$masage = $masage . '<img src="/img/Star 5.svg" alt="">';
	}
	return $masage;
}

function currentCategory($id)
{
	$pdo = getPDO();
	$stmt = $pdo->prepare("SELECT Categ_name FROM Categories WHERE id = :id");
	$stmt->execute(['id' => $id]);
	$cat = $stmt->fetch(\PDO::FETCH_ASSOC);
	return $cat['Categ_name'];
};


function ProductSelectOne($id)
{
	$pdo = getPDO();
	$stmt = $pdo->prepare("SELECT * FROM product WHERE id =:id ");
	$stmt->execute(['id' => $id]);
	return $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function HasCart($cart)
{
	return  count($cart);
}

function findOrder(string $email): array|bool
{
	$pdo = getPDO();

	$stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
	$stmt->execute(['email' => $email]);
	return $stmt->fetch(\PDO::FETCH_ASSOC);
}
