<?php
    require_once 'connect.php';

    $fullname = $_POST['fullName'];
    $phone_number = $_POST['phoneNumber'];
    $address = $_POST['address'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $service = $_POST['service'];
    $payment_method = $_POST['paymentMethod'];

    $query = "INSERT INTO orders (full_name, number_phone, address, date, time, service, payment_method) VALUES (\$1, \$2, \$3, \$4, \$5, \$6, \$7)";

    $result = pg_query_params($connect, $query, array($fullname, $phone_number, $address, $date, $time, $service, $payment_method));

    if($result){
        header("Location: ../horder.php");
    }
    else{
        header("Location: ../order.php");
    }
?>