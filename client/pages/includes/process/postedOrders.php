<?php
include("connect.php");
include("session.php");
//posted orders
$sql = "SELECT * FROM `order` WHERE orderStatus = 'not taken' AND clientId = '$session_id';";
$result = mysql_query($sql);
$count = mysql_num_rows($result);
echo $count;
?>