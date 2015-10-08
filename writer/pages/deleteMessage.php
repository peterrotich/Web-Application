<?php
include("connect.php");
include("session.php");
$id = $_GET['messageId'];

$sql = ("UPDATE `messaging` SET `messaging`.messageStatus = 'deleted' WHERE `messaging`.recipient = '$session_id' AND `messaging`.id = '$id'");
$query=mysql_query($sql) or mysql_error();  

if (!$query) {
    echo "error" . mysql_error();
} 

else {
header('location:newMessages.php');        
            }
?>