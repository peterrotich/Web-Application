<?php
include("connect.php");
include("session.php");
//posted orders
$sql = "SELECT * FROM `messaging` WHERE recipient = '$session_id' AND messageStatus = 'unread';";
$result = mysql_query($sql);
$count = mysql_num_rows($result);
echo $count;
?>