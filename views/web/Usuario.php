<?php
$db = mysqli_connect('localhost', 'root', 'root', 'bussiness');

if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}

$user = "kadhir";
$password = "123456";
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT INTO usuarios (user, password) VALUES ('{$user}', '{$passwordHash}');";

mysqli_query($db, $query);

?>