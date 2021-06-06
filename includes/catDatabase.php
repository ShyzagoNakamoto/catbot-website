<?php
$db_hostname = "localhost";
$db_username = "root";
$db_password = "";
$db_database = "uas";

$connect = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

if (!$connect) {
    echo "Connection failed!";
}