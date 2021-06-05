<?php
$db_hostname = "172.96.191.25";
$db_username = "ucweb2_catbot";
$db_password = "CatBot123";
$db_database = "ucweb2_catbot";

try {
    $conn = new PDO("mysql:host=$db_hostname;dbname=$db_database", $db_username, $db_password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}