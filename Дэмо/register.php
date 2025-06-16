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
                <a href="register.php"><img src="images/logo.png" alt=""></a>
                <a class="title" href=""><h1>Мой Не Сам</h1></a>
                <a class="header-a" href="">Заявки</a>
                <a class="header-a" href="">Заявки</a>
                <a class="header-a" href="">Заявки</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="form-reg form-auth">
            <form class="form" action="vendor/reg.php" method="post">
                <h1 class="reg_name auth_name">Регистрация</h1>
                <input class="auth" type="text" placeholder="Введите фамилию*" name="surname">
                <input class="auth" type="text" placeholder="Введите имя*" name="name">
                <input class="auth" type="text" placeholder="Введите логин*" name="login">
                <input class="auth" type="text" placeholder="Введите пароль*" minlength="6" name="password">
                <input class="auth" type="text" placeholder="Введите номер телефона*" name="phonenumber">
                <input class="auth" type="text" placeholder="Введите E-mail*" name="email">
                <p class="pole">* - поля обязательны для заполнения</p>
                <a href="authorization.php"><button class="btn_reg btn_log">Зарегистрироваться</button></a>
            </form>
        </div>
    </div>
</body>
</html>