<?php

use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;

require 'app/start.php';

if (!isset($_GET['success'], $_GET['paymentId'], $_GET['PayerID'])) {
	die();
}
if ((bool)$_GET['success']==false) {
	//redirect
	die();
}

$paymentId = $_GET['paymentId'];
$payerId = $_GET['PayerID'];

$payment = Payment::get($paymentId, $paypal);

$excecute = new PaymentExecution();
$excecute->setPayerID($payerId);

try{
 $result = $payment->excecute($excecute, $paypal);
} catch (Exception $e){
 die($e)
} 
//Redirect The User On Successfull Payment
echo "Payment Made. Thanks!";
?>