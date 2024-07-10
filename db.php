<?php
$servername = "db";
$username = "kali";
$password = "kali";
$dbName = "db_first";


$link = mysqli_connect($servername, $username, $password);

if (!$link) {
    die("Ошибка подключения: " . mysqli_connect_error());
}


$sql = "CREATE DATABASE IF NOT EXISTS $dbName";
if (!mysqli_query($link, $sql)) {
    die("Не удалось создать БД: " . mysqli_error($link));
}

mysqli_close($link);
$link = mysqli_connect($servername, $username, $password, $dbName);

if (!$link) {
    die("Ошибка подключения к БД: " . mysqli_connect_error());
}

$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(50) NOT NULL UNIQUE,
    pass VARCHAR(255) NOT NULL
)";

if (!mysqli_query($link, $sql)) {
    die("Не удалось создать таблицу Users: " . mysqli_error($link));
}


mysqli_close($link);
?>