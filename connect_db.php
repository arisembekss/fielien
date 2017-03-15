<?php
session_start();
$_SESSION['eyeMen'] = 1;
$_SESSION['eyeWomen'] = 2;
$_SESSION['lens'] = 3;

$mysql = new mysqli("localhost", "root", "", "cfielien_product");
if ($mysql->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysql->connect_error;
}

?>