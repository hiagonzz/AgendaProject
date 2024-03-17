<?php 
$BASE_URL = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI'] . '?') . '/';

$host = "localhost";
$dbname = "agenda";
$user = "root";
$pass = "";

try{

    $conn = new PDO("mysql: host=$host;dbname=$dbname", $user , $pass);

    $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
 $error = $e ->getMessage();
 echo "Erro:  $error";
}
