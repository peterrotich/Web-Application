<?php
include("connect.php");
include("session.php");
//more days
$val = "SELECT * FROM `request` WHERE clientId = '$session_id';";
$res = mysql_query($val);
$num = mysql_fetch_array($res);
//more days
$val1 = "SELECT * FROM `writerFiles` WHERE clientId = '$session_id';";
$res1 = mysql_query($val1);
$num1 = mysql_fetch_array($res1);
$num1 = mysql_num_rows($res1);
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
                        <h1 class="page-header">Client Panel -<small>Requests</small></h1>
                    </div>
                <div id = "requests" style="float:left;">
                    <a href="moreTime.php"><button type="submit" name="submit" class="btn btn-outline btn-primary btn-lg" style="width:100%; height:10%">More Time(<?php echo $num['moreTime'];?>)</button></a>
                    <p>&nbsp;</p>
                    <a href="moreMoney.php"><button type="submit" name="submit" class="btn btn-outline btn-success btn-lg" style="width:100%; height:10%">More Money(<?php ?>)</button></a>
                    <p>&nbsp;</p>
                    <a href="morePages.php"><button type="submit" name="submit" class="btn btn-outline btn-info btn-lg" style="width:100%; height:10%">More Pages(<?php ?>)</button></a>
                </div>                    
                </div>
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
