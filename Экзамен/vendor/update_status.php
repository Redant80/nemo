<?php
require_once 'connect.php';


    $statuses = $_POST['status'];
    $reasons = $_POST['reason'] ?? [];

    foreach ($statuses as $id => $status) {
        $id = (int)$id;
        $reason = isset($reasons[$id]) ? trim($reasons[$id]) : null;

        if ($status === 'Отменено' && $reason) {
            $query = "UPDATE orders SET status = \$1, cancel_reason = \$2 WHERE id = \$3";
            pg_query_params($connect, $query, array($status, $reason, $id));
        } else {
            $query = "UPDATE orders SET status = \$1, cancel_reason = NULL WHERE id = \$2";
            pg_query_params($connect, $query, array($status, $id));
        }
    }

    header("Location: ../admin.php");
    exit();

?>
