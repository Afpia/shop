<?php 
    require_once __DIR__ . '/helpers.php';

    $pdo = getPDO();

    $query = "UPDATE users SET status = :status WHERE id = :userID";

    $params = [
        'status' => 'deleted',
        'userID' => $_SESSION['user']['id']
    ];

    $stmt = $pdo->prepare($query);

    try {
        $stmt->execute($params);
    } catch (\Exception $e) {
        die($e->getMessage());
    }

    unset ($_SESSION['user']);
    redirect('/login.php')
?>