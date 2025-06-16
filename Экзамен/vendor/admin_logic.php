<?php
require_once 'connect.php';

echo '<form method="POST" action="vendor/update_status.php">';
$query = "SELECT * FROM orders";
$result = pg_query($connect, $query);

if ($result && pg_num_rows($result) > 0) {
    while ($row = pg_fetch_assoc($result)) {
        $id = $row['id'];
        $status = $row['status'];
        $cancel_reason = htmlspecialchars($row['cancel_reason'] ?? '');

        echo "<tr>
            <td>{$id}</td>
            <td>{$row['full_name']}</td> 
            <td>{$row['number_phone']}</td>
            <td>{$row['address']}</td>
            <td>{$row['service']}</td>
            <td>{$row['date']} {$row['time']}</td>
            <td>
                <select name='status[{$id}]' onchange='toggleReason(this, {$id})'>
                    <option value='Выполнено' " . ($status == 'Выполнено' ? 'selected' : '') . ">Выполнено</option>
                    <option value='В работе' " . ($status == 'В работе' ? 'selected' : '') . ">В работе</option>
                    <option value='Отменено' " . ($status == 'Отменено' ? 'selected' : '') . ">Отменено</option>
                </select>
                <div id='reason_{$id}' style='display: " . ($status == 'отменено' ? 'block' : 'none') . ";'>
                    <textarea name='reason[{$id}]' placeholder='Причина отмены'>{$cancel_reason}</textarea>
                </div>
            </td>
        </tr>";
    }
}
echo '</table>
<div style="margin-top: 20px;">
    <button type="submit">Обновить данные</button>
</div>
</form>';
?>
