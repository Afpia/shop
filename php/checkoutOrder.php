<?php
    require_once __DIR__ . '/helpers.php';

    if(empty($_SESSION['cart'])){
        redirect($_SERVER['HTTP_REFERER']);
    }

    $sum = 0;
    $DateOrder = new DateTime();
    $DateGet = $DateOrder->add(new DateInterval('P1W'));
    foreach($_SESSION['cart'] as $row){
        $productOrder = ProductSelectOne($row['id']);
        $sum += $row['count'] * ($productOrder['0']['price'] - $productOrder['0']['discountAmount']);
    }


    $pdo = getPDO();

    $query = "INSERT INTO Orders (ID_user, DateOrder, DateGet, Price) VALUES (:ID_user, :DateOrder, :DateGet, :Price)";

    $params = [
        'ID_user' => $_SESSION['user']['id'],
        'DateOrder' => $DateOrder->format('Y-m-d'),
        'DateGet' => $DateGet->format('Y-m-d'),
        'Price' => $sum
    ];

    $stmt = $pdo->prepare($query);

    try {
        $stmt->execute($params);
        $lastInsertedId = $pdo->lastInsertId();
    } catch (\Exception $e) {
        die($e->getMessage());
    }

    foreach($_SESSION['cart'] as $row){
       $query = "INSERT INTO ListOrder (ID_jewel, ID_order, count) VALUES (:ID_jewel, :ID_order, :count)";

        $params = [
            'ID_jewel' => $row['id'],
            'ID_order' => $lastInsertedId,
            'count' => $row['count']
        ];

        $stmt = $pdo->prepare($query);

        try {
            $stmt->execute($params);
        } catch (\Exception $e) {
            die($e->getMessage());
        }

    }
    unset($_SESSION['cart']);

    redirect($_SERVER['HTTP_REFERER']);

    


