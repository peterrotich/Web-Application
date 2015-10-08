<?php
include("connect.php");
include("session.php");
//posted orders
$sql = "SELECT * FROM `order` WHERE clientId = '$session_id' AND orderStatus = 'revision';";
$result = mysql_query($sql);
$count = mysql_num_rows($result);
echo $count;
?>