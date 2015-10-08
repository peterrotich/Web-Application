<?php
include("connect.php");
include("session.php");
$id = $_GET['orderId'];

if(isset($_POST["submit"]))
{
$writerId  = $_POST["writerId"];
$sql = ("UPDATE `order` SET `order`.requestWriter = '$writerId' WHERE `order`.clientId = '$session_id' AND `order`.orderId = '$id'");
$query=mysql_query($sql) or mysql_error();  

if (!$query) {
    echo "error" . mysql_error();
} 

else {

echo "<script> if(confirm('Your Account Has Been Successfully Created')==true){window.location='postedOrders.php';} </script>";

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

<title>Custom Writing Pros || Client</title>

<!-- Bootstrap Core CSS -->
<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrapper">
<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
<!-- /.navbar-header -->

<?php include('includes/header.php'); ?>
<!-- /.navbar-top-links -->

<?php include('includes/sidebar.php'); ?>
<!-- /.navbar-static-side -->
</nav>

<!-- Page Content -->
<div id="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Client Panel -<small>Request Writer</small></h1>
        </div>
        <div style="float:left; width:100%">
        <form id="requestWriter" method="POST" action="requestWriter.php">
        <table>
            <tr>
                <td><b>Writer Id:</b></td>
                <td>&nbsp;</td>
                <td>
                <input type ="text" name ="writerId" class="form-control" id="writerId" placeholder = "Enter Writer Id">
                </td>
                <td>&nbsp;</td>
                <td>
                    <button type="submit" name="submit" id="submit" class="btn btn-primary"><i class="fa fa-share wow bounceIn" data-wow-delay=".1s"></i> Request Writer</button>
                </td>
                <td>&nbsp;</td>
            </tr>
        </table>
        </form> 
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>
</body>

</html>
