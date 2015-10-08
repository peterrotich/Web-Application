<?php
include("connect.php");
include("session.php");
//posted orders
$sql = "SELECT * FROM `order` WHERE writerId = '$session_id' AND orderStatus = 'taken';";
$result = mysql_query($sql);
$count = mysql_num_rows($result);
echo $count;
?>