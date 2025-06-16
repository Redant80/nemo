<?php
session_start();
require_once('../vendor/db.php');

// Проверяем были ли отправлены данные формы
if (empty($_POST['login']) || empty($_POST['password'])) {
    $_SESSION['message'] = 'Все поля обязательны для заполнения';
    header('Location: ../authorization.php');
    exit();
}

$login = $_POST['login'];
$password = $_POST['password']; // Получаем пароль в чистом виде

// Запрос для поиска пользователя
$query = "SELECT * FROM users WHERE login = $1";
$result = pg_query_params($conn, $query, array($login));

if (!$result) {
    $_SESSION['message'] = 'Ошибка сервера. Попробуйте позже.';
    header('Location: ../authorization.php');
    exit();
}

if (pg_num_rows($result) > 0) {
    $user = pg_fetch_assoc($result);
    
    // Сравниваем пароли без хеширования (прямое сравнение)
    if ($password === $user['password']) { // Сравнение строк
        // Успешная авторизация
        $_SESSION['user_id'] = $user['id']; 
        $_SESSION['login'] = $user['login']; 
        header('Location: ../main.php'); 
        exit();
    } else {
        // Неверный пароль
        $_SESSION['message'] = 'Неверный логин или пароль';
        header('Location: ../authorization.php');
        exit();
    }
} else {
    // Пользователь не найден
    $_SESSION['message'] = 'Пользователь не найден';
    header('Location: ../authorization.php');
    exit();
}