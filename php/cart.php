<?php  
    require_once __DIR__ . '/helpers.php';

    $user_old = currentUser();

    $avatarPath = $user_old['avatar'];
    $name = $_POST['name'] ?? null;
    $email = $_POST['email'] ?? null;
    $avatar = $_FILES['avatar'] ?? null;
    $password = $_POST['password'] ?? null;
    $password_confirmation = $_POST['password_confirmation'] ?? null;

    $_SESSION['validation'] = [];

    if (!filter_var($email, filter: FILTER_VALIDATE_EMAIL)) {
        addValidationError(fieldName: 'email', message: 'The email address is invalid.');
    }

    $user = findUser($email);

    if ($user['email'] != $user_old['email']) {
        addValidationError(fieldName: 'email', message: 'The mail already exists');
    }


    if (!empty($password)) {
        if($password != $password_confirmation){
            addValidationError(fieldName: 'password', message: 'Mismatch');
        }else{
            $pdo = getPDO();

            $query = "UPDATE users SET password = :password WHERE id = :userID";

            $params = [
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'userID' => $_SESSION['user']['id']
            ];
        
            $stmt = $pdo->prepare($query);
        
            try {
                $stmt->execute($params);
            } catch (\Exception $e) {
                die($e->getMessage());
            }
        };
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
        redirect(path: '/profile.php');
    };

    if (!empty($avatar['name'])) {
        $avatarPath = uploadFile($avatar, 'avatar');
    }

    $pdo = getPDO();

    $query = "UPDATE users SET name = :name, Email = :email, avatar = :avatar WHERE id = :userID";

    $params = [
        'name' => $name,
        'email' => $email,
        'avatar' => $avatarPath,
        'userID' => $_SESSION['user']['id']
    ];

    $stmt = $pdo->prepare($query);

    try {
        $stmt->execute($params);
    } catch (\Exception $e) {
        die($e->getMessage());
    }

    $_SESSION['user']['id'] = findUser($email)['id'];

    redirect('/profile.php');
?>  


