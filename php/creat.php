<?php

include "DBconnect.php";

$arr = file_get_contents("php://input");
$result=array();
foreach (explode('&', $arr) as $t){
    list($a,$b)=explode('=', $t);
    $result[$a]=$b;
}


$name          = $result['name'];
$mail          = $result['mail'];
$phone         = $result['phone'];
$country       = $result['country'];
$Line          = $result['Line'];
$LineID        = $result['LineID'];
// echo "name=".$name."mail=".$mail. "phone=".$phone ."country=".$country ;

// 搜尋帳號
$sql = "SELECT * FROM menber WHERE phone LIKE '$phone'";
$stmt = $conn->query($sql);

if ($row = $stmt->fetch()) {
    $ans = array('msg' => 'fuck');
    echo json_encode($ans);
} else {
    // $token = md5(uniqid(rand(), true));
    // $now = date("Y-m-d H:i:s");
    $ans = array('msg' => 'ok');
    echo json_encode($ans);
    $sql = "INSERT INTO menber(name,mail,phone,country,line,lineid) VALUES('$name','$mail','$phone','$country','$Line','$LineID')";
    $conn->exec($sql);
}
