<?php
    require_once 'vendor/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
    <title>Регистрация</title>
</head>
<body>
    <div class="header">
        <div class="header-line">
            <div class="logo">
                <a href="reg.php"><img class="logo" src="images/logo.png" alt=""></a>
            </div>
            <a class="title_name" href="reg.php"><h1>Мой Не Сам</h1></a>
        </div>
    </div>

    <div class="auth_container">
        <div class="auth_form reg_form">
            <form action="vendor/register_logic.php" method="post">
                <h1 class="h1_login">Регистрация</h1>
                <input type="text" placeholder="Введите вашу фамилию*"name="surname" required class="auth_input">
                <input type="text" placeholder="Введите ваше имя*" name="name" required class="auth_input">
                <input type="phone" placeholder="Введите номер телефона*" name="phone" required class="auth_input">
                <input type="text" placeholder="Введите логин*" name="login" required class="auth_input">
                <input type="email" placeholder="Введите E-mail*" name="email" required class="auth_input">
                <input type="password" placeholder="Введите пароль*" name="password" minlength="8" required class="auth_input">
                <p class = "pole">* - поля обязательны для заполнения</p>
                <button class="btn_reg" type="submit">Зарегистрироваться</button> 
                
               
            </form>
        </div>
    </div>

</body>
</html>
