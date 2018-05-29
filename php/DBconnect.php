<?php

//  -------------------------Localhost-------------------------
$severname = "mysql";
$username = "root";
$password = "root";
$dbselect = "demo";
//  -------------------------hostinger-------------------------

$severname = "localhost";
$username = "hvipea5com";
$password = "y4c0L6?g";
$dbselect = "hvipea5com_hvipea5";


$dns="mysql:host=".$severname.";dbname=".$dbselect;

date_default_timezone_set("Asia/Taipei");

try {
    $conn = new PDO($dns,$username,$password);
    $conn->exec("SET CHARACTER SET utf8");
    $conn->exec("SET time_zone = 'Asia/Taipei'");
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // echo "<br>連線成功";

} catch (Exception $e){
    echo "<br>請聯繫客服專員處理<hr>";
    echo "Connection Failed:<br>".$e->getMessage();
}
