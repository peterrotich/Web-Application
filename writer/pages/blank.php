<?php
include("connect.php");
include("session.php");
$now = date('Y/m/d H:I');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Custom Writing Pros || Blank</title>

<!-- Bootstrap Core CSS -->
<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="timer/jquery.countdownTimer.css" />

<style type="text/css">
.displayformat {
font-size:18px;
font-style: italic;
}
</style>
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
<h1 class="page-header">Writer Panel - <small>Blank</small></h1>   
</div>
<table style="border:0px;">
<tr>
<td>D</td>
<td>H</td>
<td>M</td>
<td>S</td>
</tr>
<tr>
<td colspan="4"><span id="given_date"></span></td>
</tr>
</table>
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
<script type="text/javascript" src="timer/jquery-2.0.3.js"></script>
<script type="text/javascript" src="timer/jquery.countdownTimer.js"></script>
<script type="text/javascript">
$(function(){
$('#future_date').countdowntimer({
dateAndTime : "2018/01/01 00:00:00",
size : "lg",
regexpMatchFormat: "([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})",
regexpReplaceWith: "$1<sup class='displayformat'>days</sup> / $2<sup class='displayformat'>hours</sup> / $3<sup class='displayformat'>minutes</sup> / $4<sup class='displayformat'>seconds</sup>"
});
});
</script>
<script type="text/javascript">
var dateToday = "<?php echo $now ?>"
</script>

<script>
$(function(){
$('#given_date').countdowntimer({
//startDate : "2014/10/01 00:00:00",
startDate : dateToday,
dateAndTime : "2015/9/14 00:00:00",
size : "sm"
});
});
</script>

</body>

</html>
