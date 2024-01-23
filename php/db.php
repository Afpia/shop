<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "organic_site";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Ошибка ".mysqli_connect_error());
};