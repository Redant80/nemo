<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
    <title>История заявок</title>
</head>

<body>
    <div class="header">
        <div class="header-line">
            <div class="logo">
                <a href="order.php"><img src="images/logo.png" alt="Логотип"></a>
            </div>
            <a class="title_name" href="order.php">
                <h1>Мой Не Сам</h1>
            </a>
        </div>
        <div class="menu-items">
            <a class="menu-btn" href="order.php">Формирование заявки</a>
            <a class="menu-btn" href="horder.php">Создание заявки</a>
        </div>
        <div class="logout-container">
            <button class="logout-btn" onclick="logout()">
                <img src="images/logout.svg" alt="Logout" />
            </button>
        </div>
    </div>
    <div class="h-cont">
        <div class="horder-container">
            <h2>История заявок</h2>
        </div>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>Номер</th>
                <th>Вид услуги</th>
                <th>Дата и время</th>
                <th>Статус</th>
                <th>Прична отказа</th>
            </tr>
            <?php
                require_once 'vendor/connect.php';
                require_once 'vendor/showOrders.php'
            ?>
        </table>
    </div>

    <script>
        function logout() {
            window.location.href = 'log.php';
        }
    </script>
</body>

</html>

