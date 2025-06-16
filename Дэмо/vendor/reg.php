<?php
session_start();

require_once('../vendor/db.php');

$surname = $_POST['surname'];
$name = $_POST['name'];
$login = $_POST['login'];
$password = $_POST['password'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];


$query = "INSERT INTO users (surname, name, login, password, phonenumber, email) VALUES ($1,$2, $3,$4,$5,$6)";

$result = pg_query_params($conn, $query, array($surname, $name, $login, $password, $phonenumber, $email));

if ($result) {
    header("Location:../authorization.php");
    exit();
} else {
    die("Ошибка регистрации:" . pg_last_error($conn));
}
