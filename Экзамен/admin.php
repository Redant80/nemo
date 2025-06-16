<?php
    session_start();
?>
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
        <table>
            <tr>
                <th>Номер</th>
                <th>ФИО</th>
                <th>Номер телефона</th>
                <th>Адрес</th>
                <th>Вид услуги</th>
                <th>Дата и время</th>
                <th>Статус</th>
            </tr>
           <?php require_once 'vendor/admin_logic.php'; ?>
        </table>
    </div>
  

  <script>
function toggleReason(select, id) {
    const reasonDiv = document.getElementById('reason_' + id);
    if (select.value === 'Отменено') {
        reasonDiv.style.display = 'block';
    } else {
        reasonDiv.style.display = 'none';
    }
}
</script>

</body>

</html>