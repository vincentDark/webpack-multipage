<?php

include "DBconnect.php";

$sql = "SELECT * FROM `menber` ORDER BY `menber`.`req_date`";
$stmt = $conn->query($sql);
$row = $stmt->fetchAll();
echo  json_encode($row, JSON_UNESCAPED_UNICODE);