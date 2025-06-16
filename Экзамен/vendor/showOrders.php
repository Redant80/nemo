<?php
    $query = "SELECT * FROM orders";

    $result = pg_query($connect, $query);

    if($result && pg_num_rows($result) > 0){
        while ($row = pg_fetch_assoc($result)){
            echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['service']}</td> 
            <td>{$row['date']} {$row['time']}</td>
            <td>{$row['status']}</td>
            <td>{$row['cancel_reason']}</td>
            </tr>";
        }
    }
?>