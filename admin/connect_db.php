<?php
date_default_timezone_set("Asia/Jakarta");
$mysql = new mysqli("localhost", "cfielien_admin", "admin", "cfielien_product");
if ($mysql->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysql->connect_error;
}
?>