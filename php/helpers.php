<?php

session_start();

require_once __DIR__ . '/config.php';

function redirect(string $path)
{
    header(header:"Location:$path");
    die();
}

function clearValidation()
{
    $_SESSION['validation'] = [];
}

function hasValidationError(string $fieldName):bool
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

function uploadFile(array $file,string $prefix='')
{
    $uploadPath = __DIR__ . '/../uploads';
    
    if(!is_dir($uploadPath)){
        mkdir($uploadPath, 0777,true);
    }

    $ext = pathinfo($file['name'],PATHINFO_EXTENSION);
    $fileName = $prefix . '_' . time() . ".$ext";

    $path = "$uploadPath/$fileName" ;

    if(!move_uploaded_file($file['tmp_name'], $path)){
        die('ошибка при загрузке файла');
    }

    return "uploads/$fileName";

}

function getPDO()
{
    try{
        return new \PDO('mysql:host=' . DB_HOST . ';charset=utf8;dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
    }catch(\PDOException $e){
        die("Connection error: {$e ->getMessage()}");
    }
}

function getMySQL()
{
    $conn = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
    if(!$conn){
    die("Ошибка ".mysqli_connect_error());
};
}

function findUser(string $email): array|bool
{
    $pdo = getPDO();

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);
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

function logout(): void
{
    unset($_SESSION['user']['id']);
    redirect('/');
}

function checkAuth(): void
{
    if (!isset($_SESSION['user']['id'])) {
        redirect('/');
    }
}

function checkGuest()
{
    empty($_SESSION['user']['id']);
}