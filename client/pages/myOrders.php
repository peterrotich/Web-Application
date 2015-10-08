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
            <h1 class="page-header">Client Panel -<small>Posted Orders</small></h1>
        </div>
        <div style = "float:left;width:100%;">
        <table class = "table" align="center" style="table-layout:fixed;">
        <tr>
        <th>Order Id</th>
        <th>Paper Topic</th>
        <th>No. of Pages</th>
        <th>Amount</th>
        <th>Date Posted</th>
        <th>Deadline</th>
        <th>Status</th>
        <th>Action</th>
        </tr>
        <?php
        $sql = "SELECT * FROM `order` WHERE orderStatus != 'not taken' AND clientId = '$session_id';";
        $result = mysql_query($sql);
        while($row=mysql_fetch_assoc($result)){
        ?>
        <tr>
        <td><?php echo $row['orderId'];?></td>
        <td><?php echo $row['paperTopic'];?></td>
        <td><?php echo $row['numberOfPages'];?></td>
        <td><?php echo $row['total'];?></td>
        <th><?php echo $row['datePosted'];?></th>
        <td><?php echo $row['deadline'];?></td>
        <td><?php
        if ($row['orderStatus'] == 'taken') {
            echo "in progress";
        }elseif ($row['orderStatus'] == 'complete') {
            echo "Complete";
        }elseif ($row['orderStatus'] == 'revision') {
            echo "Revision";
        }else{
            echo "no order status";
        }

        ?></td>
        <td>

        <?php 
        $orderId = $row['orderId'];          
        if ($row['orderStatus'] == 'taken') {

            echo "<a href='activate_account.php?id=$orderId'><i class='glyphicon glyphicon-envelope '></i></a>".'&nbsp;&nbsp;&nbsp;';

            echo "<a href='activate_account.php?id=$orderId'><i class='glyphicon glyphicon-plus-sign '></i></a>";
        } else if ($row['orderStatus'] == 'complete') {
            echo "<a href='activate_account.php?id=$orderId'><i class='glyphicon glyphicon-envelope '></i></a>".'&nbsp;&nbsp;&nbsp;';

            echo "<a href='activate_account.php?id=$orderId'><i class='glyphicon glyphicon-floppy-save '></i></a>".'&nbsp;&nbsp;&nbsp;';

            echo "<a href='activate_account.php?id=$orderId'><i class='glyphicon glyphicon-ok-sign '></i></a>";
        }else if ($row['orderStatus'] == 'revision') {
            echo "<a href='activate_account.php?id=$orderId'><i class='glyphicon glyphicon-envelope '></i></a>".'&nbsp;&nbsp;&nbsp;';

            echo "<a href='activate_account.php?id=$orderId'><i class='glyphicon glyphicon-envelope '></i></a>".'&nbsp;&nbsp;&nbsp;';

            echo "<a href='activate_account.php?id=$orderId'><i class='glyphicon glyphicon-plus-sign '></i></a>";
        }
        ?>
        </td>
        </tr>
        <?php
        }
        ?>
        <tr>
        <td colspan = "8" style = "text-align:center;">
        <?php
        $check = mysql_num_rows($result);
        if ($check<1) {
            echo "You don't have any orders at the monent";
        }
        ?>
        </td>
        </tr>
        </table>
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
