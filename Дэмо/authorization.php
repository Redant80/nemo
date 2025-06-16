<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Register</title>
</head>
<body>
    <div class="header">
        <div class="header-line">
            <div class="header-menu">
                <a href="authorization.php"><img src="images/logo.png" alt=""></a>
                <a class="title" href=""><h1>Мой Не Сам</h1></a>
                <a class="header-a" href="">Заявки</a>
                <a class="header-a" href="">Заявки</a>
                <a class="header-a" href="">Заявки</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="form-reg form-auth">
            <form class="form" action="vendor/log.php" method="post">
                <h1 class="reg_name auth_name">Авторизация</h1>
                <input class="auth" type="text" placeholder="Введите логин*" name="login">
                <input class="auth" type="text" placeholder="Введите пароль*" minlength="6" name="password">
                <p class="pole">* - поля обязательны для заполнения</p>
                <a href="authorization.php"><button class="btn_reg btn_log">Войти</button></a>
            </form>
        </div>
    </div>
</body>
</html>