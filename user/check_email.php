<?php
###### db ##########
$db_username = 'root';
$db_password = '';
$db_name = 'customwriting';
$db_host = 'localhost';
################


//check we have email post var
if(isset($_POST["email"]))
{
	//check if its ajax request, exit script if its not
	if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
		die();
	}
	
	//try connect to db
	$connecDB = mysqli_connect($db_host, $db_username, $db_password,$db_name)or die('could not connect to database');
	
	//trim and lowercase email
	$email =  strtolower(trim($_POST["email"])); 
	
	//sanitize email
	$email = filter_var($email, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	
	//check email in db
	$results = mysqli_query($connecDB,"SELECT regId FROM registration WHERE email='$email'");
	
	//return total count
	$email_exist = mysqli_num_rows($results); //total records
	
	//if value is more than 0, email is not available
	if($email_exist) {
		die('<img src="imgs/not-available.png" />');
	}else{
		die('<img src="imgs/available.png" />');
	}
	
	//close db connection
	mysqli_close($connecDB);
}
?>

