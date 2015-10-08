<?php
include("connect.php");
include("session.php");
$id = $_GET['orderId'];

$sql = ("UPDATE `order` SET `order`.orderStatus = 'taken', `order`.writerId = '$session_id' WHERE `order`.orderId = '$id'");
$query=mysql_query($sql) or mysql_error();  

if (!$query) {
    echo "error" . mysql_error();
} 

else {
header('location:postedOrders.php');        
            }
?>