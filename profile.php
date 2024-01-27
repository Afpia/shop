<?php 
require_once __DIR__ . '/php/helpers.php' ;

checkAuth();

$user = currentUser();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <img src="<?php echo $user['avatar'] ?>" alt="">
    <p><?php echo $user['name'] ?></p>
    <p><?php echo $user['Email'] ?></p>
    <form action="/php/logout.php">
        <button>Выйти из аккаунта</button>
    </form>
</body>
</html>