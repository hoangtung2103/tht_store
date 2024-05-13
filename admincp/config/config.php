<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webmayanh";

$mysqli = new mysqli($servername, $username, $password, $dbname);


if ($mysqli->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}
echo "";
?>
