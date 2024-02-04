<?php  
    require_once __DIR__ . '/helpers.php';

    $avatarPath = null;
    $name = $_POST['name'] ?? null;
    $email = $_POST['email'] ?? null;
    $avatar = $_FILES['avatar'] ?? null;

    $_SESSION['validation'] = [];

    if (!filter_var($email, filter: FILTER_VALIDATE_EMAIL)) {

        addValidationError(fieldName: 'email', message: 'The email address is invalid.');
    }
    
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
        redirect(path: '/profile.php');
    };

    if (!empty($avatar['name'])) {
        $avatarPath = uploadFile($avatar, 'avatar');
    }
    
    print_r($avatar);

    echo $avatarPath

    // $pdo = getPDO();

    // $query = "UPDATE users SET name = :name, Email = :email, avatar = :avatar WHERE id = :userID";

    // $params = [
    //     'name' => $name,
    //     'email' => $email,
    //     'avatar' => $avatarPath,
    //     'userID' => $_SESSION['user']['id']
    // ];

    // $stmt = $pdo->prepare($query);

    // try {
    //     $stmt->execute($params);
    // } catch (\Exception $e) {
    //     die($e->getMessage());
    // }

    // $_SESSION['user']['id'] = findUser($email)['id'];

    // redirect('/');
?>  


