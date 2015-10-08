<?php
include("connect.php");
include("session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Custom Writing Pros || Posted Orders</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- css timer -->
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
                        <h1 class="page-header">Writer Panel - <small>Posted Orders</small></h1>   
                    </div>
                    <div id = "posted_Orders"style = "float:left;width:100%;"></div>                
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
    <!-- jQuery Timer-->
    <script type="text/javascript" src="timer/jquery-2.0.3.js"></script>
    <script type="text/javascript" src="timer/jquery.countdownTimer.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    
    <!-- Timer -->
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

    <?php                    
    $res = "SELECT deadline FROM `order` WHERE orderStatus = 'not taken';";
    $count = mysql_query($res);
    while($raw=mysql_fetch_assoc($count)){
    $now = date('Y/m/d H:I');    
    $futureDate = $raw['deadline'];
    }                
    ?>
    <script type="text/javascript">
    var dateToday  = "<?php echo $now ?>"
    var dateToday2 = "<?php echo $futureDate ?>"
    </script>

    <script>
    $(function(){
    $('#given_date').countdowntimer({
    //startDate : "2014/10/01 00:00:00",
    startDate : dateToday,
    dateAndTime : dateToday2,
    size : "sm"
    });
    });
    </script>

    <!-- Processing Posted Orders-->
    <script type="text/javascript">
    var resreshId = setInterval(function()
    {
    $('#posted_Orders').show().load('http://localhost/customwritingpros/writer/pages/process/postedOrders.php');

    }, 500
        );
    </script>

</body>

</html>
