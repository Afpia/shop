<?php
require_once('db.php');
$Email = $conn -> real_escape_string ($_POST['Email']);
$pass = $conn -> real_escape_string ($_POST['pass']);
if(empty($Email) || empty($pass)){
    echo'Заполните поля';
}else{
    $sql = "SELECT * FROM users WHERE Email = '$Email' AND pass = '$pass'";
    $result = $conn->query($sql);
    if($result > 0){
        echo"Добро пожаловать";
    }
}