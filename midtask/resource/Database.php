<?php

$username = 'root';
$dsn = 'mysql:host=localhost; dbname=currency';
$password = '';

try {
    $db = new PDO($dsn, $username, $password);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ex) {
    echo "Connection failed " . $ex->getMessage();
}
