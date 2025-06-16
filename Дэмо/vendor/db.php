<?php

$host = 'localhost';
$db = 'demo';
$user = 'postgres';
$password = '';

$conn = pg_connect("host = $host port = 5432 dbname = $db user = $user password = $password");

?>