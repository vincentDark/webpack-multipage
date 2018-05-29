<?php


include "./DBconnect.php";

$sql = "CREATE TABLE menber(
    id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL COMMENT '(姓名)',
    mail VARCHAR(50) NOT NULL COMMENT '(mail)',
    country VARCHAR(20) NOT NULL COMMENT '(國家)',
    phone VARCHAR(20) NOT NULL COMMENT '(手機號碼)',
    temp VARCHAR(20) DEFAULT 0 COMMENT '(備用)',
    req_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT '(資料創建時間)'
)";

try {
   $conn->exec($sql);
   echo "<br>Table menber created successfully";
   $conn = null;
} catch (Exception $e) {
   echo "<br>請聯繫客服專員處理<hr>";
   echo "Connection Failed:<br>".$e->getMessage();
};