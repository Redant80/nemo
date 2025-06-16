<?php
    require_once 'connect.php';

    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $password = md5($password);

    $query = "INSERT INTO users (name, surname, number_phone, login, email, password) VALUES (\$1, \$2, \$3, \$4, \$5, \$6)";

    $result = pg_query_params($connect, $query, array($name, $surname, $phone, $login, $email, $password));

    if($result){
        header("Location: ../log.php");
    }
?>