<?php

include("connect.php");
function validate_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if (isset($_POST['submit'])) {
    $regId          = $_POST['regId'];
    $firstName      = $_POST['firstName'];
    $middleName     = $_POST['middleName'];
    $lastName       = $_POST['lastName'];   
    $email          = $_POST['email'];
    $nationality    = $_POST['nationality'];
    $dateOfBirth    = $_POST['dateOfBirth'];
    $gender         = $_POST['gender'];
    $nationalId     = $_POST['nationalId'];
    $telephoneNumber= $_POST['telephoneNumber'];
    $mobileNumber   = $_POST['mobileNumber'];
    $userType       = $_POST['userType'];
    $pass           = $_POST['password'];
    $password       = sha1($pass);
       
  $sql = ("INSERT INTO `customwriting`.`registration` (`regId`, `firstName`, `middleName`, `lastName`, `email`, `nationality`, `dateOfBirth`, `gender`, `nationalId`, `telephoneNumber`, `mobileNumber`, `onlineStatus`, `activationStatus`, `accountStatus`, `userType`, `password`) 
    VALUES ('$regId', '$firstName', '$middleName', '$lastName', '$email', '$nationality', '$dateOfBirth', '$gender', '$nationalId', '$telephoneNumber', '$mobileNumber', 'offline', 'not active', 'inactive', '$userType', '$password')");

  $query=mysql_query($sql) or mysql_error();
  if (!$query) {
        echo "error" . mysql_error();
    }

  $sql2 = ("INSERT INTO `customwriting`.`writerAccount` (`reg_Id`) VALUES ('$regId')");
 
  $query2=mysql_query($sql2) or mysql_error();
  if (!$query2) {
        echo "error" . mysql_error();
    }

  else {
     echo "<script> if(confirm('Your Account Has Been Successfully Created')==true){window.location='logIn.php';} </script>";       
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Custom Writing Pros || Register</title>
    <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("#email").keyup(function (e) {
    
        //removes spaces from email
        $(this).val($(this).val().replace(/\s/g, ''));
        
        var email = $(this).val();
        if(email.length < 2){$("#user-result").html('');return;}
        
        if(email.length >= 2){
            $("#user-result").html('<img src="imgs/ajax-loader.gif" />');
            $.post('check_email.php', {'email':email}, function(data) {
              $("#user-result").html(data);
            });
        }
    }); 
});
</script>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">    
<?php include("includes/navbar.php"); ?>
<div id = "body-content">
<h1 align = "Center"><i class="fa fa-plus-circle wow bounceIn text-success"></i> Create Your Account</h1>
<div id = "reg">
    <b>Fill The Following Details *</b>
    <form id = "register" name = "register" method = "POST" action = "register.php">
        <table width = "50%" align = "center" cellspacing="20" border = "0">
            <tr>
                <td align = "left">
                    &nbsp;
                </td>
                <td>
                    <input type="hidden"  name="regId" id = "regId"  value="" >
                </td>
                <td>&nbsp;</td>
            </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
            <tr>
                <td align = "left">
                    First Name:
                </td>
                <td>
                    <input type="text" class = "form-control" name="firstName" required value="" maxlength="255" onclick="randomString();" placeholder = "First Name" pattern = "[a-zA-Z]*">
                </td>
                <td>&nbsp;</td>
            </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
            <tr>
                <td align = "left">
                    Middle Name:
                </td>
                <td>
                    <input type="text" class = "form-control" name="middleName" required value="" maxlength="255" placeholder = "Middle Name" pattern = "[a-zA-Z]*">                </td>
                <td>&nbsp;</td>
            </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
            <tr>
                <td align = "left">
                    Last Name:
                </td>
                <td>
                    <input type="text" class = "form-control" name="lastName" required value="" maxlength="255" placeholder = "Last Name" pattern = "[a-zA-Z]*">                </td>
                <td>&nbsp;</td>
            </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
            <tr>
                <td align = "left">
                    Email Address:
                </td>
                <td>
                    <input type="email" class = "form-control" name="email" id="email" required value="" maxlength="255" placeholder = "Email Address">
                </td>
                <td><span id="user-result"></span></td>
            </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
            <tr>
                <td align = "left">
                    Nationality:
                </td>
                <td>
                    <input type="text" class = "form-control" name="nationality" required value="" maxlength="255" placeholder = "Nationality">
                </td>
                <td>&nbsp;</td>
            </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
            <tr>
                <td align = "left">
                    Date Of Birth:
                </td>
                <td>
                    <input type="date" class = "form-control" name="dateOfBirth" required value="" maxlength="255" placeholder = "dateOfBirth">
                </td>
                <td>&nbsp;</td>
            </tr>
               <tr>
                    <td>&nbsp;</td>
                </tr>
            <tr>
                <td align = "left">
                    Gender:
                </td>
                <td>
                    <select name = "gender" class = "form-control" required pattern = "[a-zA-Z]*">
                        <optgroup label = "Select Gender">
                        <option selected>
                            -Select Gender-
                        </option>
                        <option>
                            Male
                        </option>
                        <option>
                            Female
                        </option>
                        </optgroup>
                    </select>
                </td>
                <td>&nbsp;</td>
            </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
            <tr>
                <td align = "left">
                    National ID/Passport:
                </td>
                <td>
                    <input type="text" class = "form-control" name="nationalId" required value="" maxlength="255" placeholder = "National ID/ Passport No." pattern = "[0-9]*">
                </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                    <td>&nbsp;</td>
                </tr>
            <tr>
                <td align = "left">
                    Telephone Number:
                </td>
                <td>
                    <input type="text" class = "form-control" name="telephoneNumber" required value="" maxlength="255" placeholder = "Telephone Number" pattern = "[+()0-9]*">
                </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                    <td>&nbsp;</td>
                </tr>
            <tr>
                <td align = "left">
                    Mobile Number:
                </td>
                <td>
                    <input type="text" class = "form-control" name="mobileNumber" required value="" maxlength="255" placeholder = "Mobile Number" pattern = "[+()0-9]*">
                </td>
                <td>&nbsp;</td>
            </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
            <tr>
                <td align = "left">
                    User Type:
                </td>
                <td>
                    <select name = "userType" class = "form-control" required pattern = "[a-zA-Z]*">
                        <optgroup label = "Select Gender">
                        <option selected>
                            -Select User Type-
                        </option>
                        <option>
                            client
                        </option>
                        <option>
                            writer
                        </option>
                        </optgroup>
                    </select>
                </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <td align = "left">
                    Password:
                </td>
                <td>
                    <input type="password" class = "form-control" name="password" required value="" maxlength="255" placeholder = "Password">
                </td>
                <td>&nbsp;</td>
            </tr>
               <tr>
                    <td>&nbsp;</td>
                </tr>
               <tr>
                <td align = "right">
                    <button type = "reset" name="reset" class="btn btn-outline btn-primary" value = ""><i class="fa fa-refresh wow bounceIn"></i> Reset</button>
                </td>
                <td align = "center">
                    <button type = "submit" name="submit" class="btn btn-outline btn-success" value = ""><i class="fa fa-1x fa-arrow-right wow bounceIn"></i> Create Account</button>
                </td>
            </tr>
        </table>
    </form>
</div>
</div>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Top Feature List</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-font wow bounceIn text-primary"></i>
                        <h3>Quality Writing</h3>
                        <p class="text-muted">Our templates are updated regularly so they don't break.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-history wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>Timely Submision</h3>
                        <p class="text-muted">You can use this theme as is, or you can make changes!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-xing wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>Plagiarism Free</h3>
                        <p class="text-muted">We update dependencies to keep things fresh.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-check-square-o wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Compliance with policy</h3>
                        <p class="text-muted">You have to make your websites with love these days!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include("includes/footer.php");?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>
    <script type="text/javascript">
    function randomString() {
    var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    //abcdefghiklmnopqrstuvwxyz
    var string_length = 4;
    var randomstring = '';
    for (var i=0; i<string_length; i++) {
        var rnum = Math.floor(Math.random() * chars.length);
        randomstring += chars.substring(rnum,rnum+1);
    }
    document.register.regId.value = randomstring;
}
</script>
</body>
</html>
