<?php
session_start();
include("connect.php");
if(isset($_POST["submit"]))
{
$email     =$_POST["email"];
$pass  = $_POST["password"];

$password      = sha1($pass);

$exe=mysqli_query($Con,"select  * from registration where password='$password' and email='$email'");
$row= mysqli_fetch_array($exe);
if(mysqli_num_rows(mysqli_query($Con,"select  * from registration where password='$password' and email='$email'" ))>0)
{

$_SESSION['id']=$row["regId"];

if ($row["userType"] == 'admin') {

  header("location:../admin/index.php");
}else

if (($row["userType"] == 'client') && ($row["activationStatus"] == 'active') && ($row["accountStatus"] == 'active')) {

    header("location:../client/index.php");
}if (($row["userType"] == 'client') && ($row["activationStatus"] == 'not active') && ($row["accountStatus"] == 'active')) {

header("location:inactive.php");
}if (($row["userType"] == 'client') && ($row["activationStatus"] == 'active') && ($row["accountStatus"] == 'inactive')) {

    header("location:inactive.php");
}if (($row["userType"] == 'client') && ($row["activationStatus"] == 'not active') && ($row["accountStatus"] == 'inactive')) {

header("location:inactive.php");
}else
if (($row["userType"] == 'writer') && ($row["activationStatus"] == 'active') && ($row["accountStatus"] == 'active')) {

    header("location:../writer/index.php");
}if (($row["userType"] == 'writer') && ($row["activationStatus"] == 'not active') && ($row["accountStatus"] == 'active')) {

header("location:inactive.php");
}if (($row["userType"] == 'writer') && ($row["activationStatus"] == 'active') && ($row["accountStatus"] == 'inactive')) {

header("location:inactive.php");
}if (($row["userType"] == 'writer') && ($row["activationStatus"] == 'not active') && ($row["accountStatus"] == 'inactive')) {

header("location:inactive.php");
}
}
else
{
?>
<script>alert("login failed, Email or Password is Incorrect");</script>
<?php
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

    <title>Custom Writing Pros || Log In</title>

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
<h1 align = "Center"><i class="fa fa-unlock wow bounceIn text-success"></i> Log In to Your Account</h1>
<div id = "logIn">
    <b>Please Enter Your Email Address and Password</b>
    <hr/>
    <form id = "logIn" method = "POST" action = "logIn.php">
        <table width = "30%" align = "center" cellspacing="20" border = "0">
            <tr>
                <td align = "left">
                    Email Address:
                </td>
                <td>
                    <input type="email" class = "form-control" name="email" required value="" maxlength="255" placeholder = "Email Address">
                </td>
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
            </tr>
               <tr>
                    <td>&nbsp;</td>
                </tr>
               <tr>
                <td align = "right">
                    <button type = "reset" name="reset" class="btn btn-outline btn-primary" value = ""><i class="fa fa-refresh wow bounceIn"></i> Reset</button>
                </td>
                <td align = "right">
                    <button type = "submit" name="submit" class="btn btn-outline btn-success" value = ""><i class="fa fa-1x fa-sign-in wow bounceIn"></i> Log In</button>
                </td>
            </tr>
        </table>
    </form>
    Click <a href = "forgotPassword.php">Here</a> If You <a href = "forgotPassword.php">Forgot Your Password</a>
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
</body>
</html>
