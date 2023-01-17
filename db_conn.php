<?php

$dbhost = "127.0.0.1";
$dbusername = "root";
$dbpassword = "";
$dbname = "nms";

$conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);

if (!$conn) {
    die('Connection Failed'. mysqli_connect_error());
}
