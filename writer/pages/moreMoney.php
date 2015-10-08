<?php
include("connect.php");
include("session.php");
$id = $_GET['orderId'];

$val = ("SELECT * FROM `order` WHERE `order`.orderStatus =  'taken' AND `order`.orderId =  '$id'");
$num = mysql_query($val);
$res = mysql_fetch_array($num);
$client = $res['clientId'];

$sql = ("UPDATE `request` SET `request`.orderId 	= '$id', 
							  `request`.writerId 	= '$session_id', 
							  `request`.clientId 	= '$client',
							  `request`.moreMoney 	= 'requested' 
		WHERE `request`.orderId = '$id'");
$query=mysql_query($sql) or mysql_error();  

if (!$query) {
    echo "error" . mysql_error();
} 

else {
header('location:PendingOrders.php');        
            }
?>