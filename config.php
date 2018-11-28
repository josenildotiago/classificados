<?php
session_start();
global $pdo;
$host = "localhost";
$user = "root";
$pass = "";
$db = "classificados";
$dsn = "mysql:host={$host};dbname={$db}";
$options = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
try{
    $pdo = new PDO($dsn,$user,$pass,$options);
}
catch(PDOException $e){
    echo utf8_decode("Erro de conexão ao banco"). $e->getMessage();
}
?>