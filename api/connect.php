<?php
$host = 'localhost';
$port = 3306;
$dbname = 'voting';
$username = 'voting';
$password = 'Rishh_2024';
$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
    die("connection failed: ".mysqli_connect_error());
}
else{
    echo "connected";
}
?>