<?php


include "./DBconnect.php";

$sql = "ALTER TABLE `menber` ADD `line` VARCHAR(10) NULL COMMENT 'line or wechat' AFTER `phone`, ADD `lineid` VARCHAR(30) NULL COMMENT 'id' AFTER `line`, ADD `temp2` VARCHAR(30) NULL COMMENT '備用2' AFTER `lineid`";

try {
   $conn->exec($sql);
   echo "<br>Table menber created successfully";
   $conn = null;
} catch (Exception $e) {
   echo "<br>請聯繫客服專員處理<hr>";
   echo "Connection Failed:<br>".$e->getMessage();
};
