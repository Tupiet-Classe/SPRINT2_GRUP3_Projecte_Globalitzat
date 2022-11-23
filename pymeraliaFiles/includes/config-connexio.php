<?php 
$host = "mariadb";
$user = "pymeralia";
$password = "pymeralia1";
$db_name = "pymeralia";

$conn = mysqli_connect($host, $user, $password, $db_name);

mysqli_set_charset($conn, "utf8");

?>