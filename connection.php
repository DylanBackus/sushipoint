<?php
$host = "localhost";
$user = "root";
$password = '';
$db_name = "javatpoint";

$con = mysqli_connect($host, $user, $password, $db_name);
$con = mysqli_connect($host, $user, $password, $db_name);

if (mysqli_connect_errno()) {
    die("Failed to connect with MySQL: " . mysqli_connect_error());
}

mysqli_set_charset($con, "utf8");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
if (mysqli_connect_errno()) {
    die("Failed to connect with MySQL: " . mysqli_connect_error());
}
?>