<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
    <title>Document</title>

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

    <div class="order-container">
        <h2>Форма заказа</h2>
        <form id="orderForm" action="vendor/orderSend.php" method="POST">
            <div class="form-row">
                <div class="left-column">
                    <div class="form-group">
                        <label for="fullName">ФИО:</label>
                        <input type="text" id="fullName" name="fullName" required>
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber">Номер телефона:</label>
                        <input type="tel" id="phoneNumber" name="phoneNumber" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Адрес:</label>
                        <input type="text" id="address" name="address" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Дата:</label>
                        <input type="date" id="date" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="time">Время:</label>
                        <input type="time" id="time" name="time" required>
                    </div>
                </div>
                <div class="center-column">
                    <div class="form-group">
                        <label for="service">Выбор услуги:</label>
                        <select id="service" name="service" required>
                            <option value="">-- Выберите услугу --</option>
                            <option value="Общий клининг">Общий клининг</option>
                            <option value="Генеральная уборка">Генеральная уборка</option>
                            <option value="Послестроительная уборка">Послестроительная уборка</option>
                            <option value="Химчистка ковров и мебели">Химчистка ковров и мебели</option>
                            <option value="other">Иная услуга</option>
                        </select>
                        <textarea id="otherService" name="otherService" placeholder="Укажите другую услугу" style="display: none;"></textarea>
                    </div>
                </div>
                <div class="right-column">
                    <div class="form-group">
                        <label for="paymentMethod">Способ оплаты:</label>
                        <select id="paymentMethod" name="paymentMethod" required>
                            <option value="">-- Выберите способ оплаты --</option>
                            <option value="Наличные">Наличные</option>
                            <option value="Банковская карта">Банковская карта</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="submit-btn">Отправить заявку</button>
        </form>
    </div>
    <script>
        const serviceSelect = document.getElementById('service');
        const otherServiceTextarea = document.getElementById('otherService');

        serviceSelect.addEventListener('change', function() {
            if (this.value === 'other') {
                otherServiceTextarea.style.display = 'block';
            } else {
                otherServiceTextarea.style.display = 'none';
                otherServiceTextarea.value = '';
            }
        });

        function logout() {
            window.location.href = 'log.php';
        }
    </script>
</body>

</html>