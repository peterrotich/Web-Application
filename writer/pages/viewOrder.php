<?php
include("connect.php");
include("session.php");
$id = $_GET['orderId'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Custom Writing Pros || View Order</title>

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
                        <h1 class="page-header">Writer Panel - <small>Order: <?php echo $id;?> </small></h1>   
                    </div>
            <div style="padding-left:3%;padding-top:10%;">
            <div id="posted_orders">
            <form id = "posted_orders" name = "posted_orders" action="" method="POST">
                <?php
                    $sql = "SELECT * FROM `order` WHERE orderStatus = 'not taken' AND orderId = '$id'";
                    $result = mysql_query($sql);
                    $check = mysql_num_rows($result);
                    if ($check<1) {
                        echo "This order has already beed requested by another user";
                    }
                    while
                    ($row=mysql_fetch_assoc($result)){
                    ?>
                    <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <b>Paper Subject:</b> <i><?php echo $row['paperSubject'];?></i>
                                    </a>
                                </h4>
                            </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <table align="left" class="table table-hover" style = "table-layout:fixed;">
                          <tr style="margin-bottom:0%">
                            <td><b>Paper Topic:</b></td><td> <?php echo $row['paperTopic'];?></td>
                            <td><b>Paper Style:</b></td><td> <?php echo $row['paperStyle'];?></td>
                          </tr>
                          <tr style="margin-bottom:0%">
                            <td><b>Language Style:</b></td><td> <?php echo $row['languageStyle'];?></td>
                            <td><b>Type Of Work:</b></td><td> <?php echo $row['typeOfWork'];?></td>
                          </tr>
                          <tr style="margin-bottom:0%">
                            <td><b>Deadline:</b></td><td> <?php echo $row['deadline'];?></td>
                            <td><b>Level:</b></td><td> <?php echo $row['level'];?></td>
                          </tr>
                          <tr style="margin-bottom:0%">
                            <td><b>No. of Pages:</b></td><td> <?php echo $row['numberOfPages'];?></td>
                            <td><b>No. of Sources:</b></td><td> <?php echo $row['numberOfsources'];?></td>
                          </tr>
                          <tr style="margin-bottom:0%">
                            <td><b>Instructions:</b></td><td> <?php echo $row['instructions'];?></td>
                            <td><b>Amount:</b></td><td> <?php echo $row['total'];?></td>
                          </tr>
                          <tr>
                            <td colspan = "4" style = "text-align:center;">
                        <a href="JavaScript:if(confirm('Request this order?')==true){window.location='requestOrder.php?orderId=<?=$row["orderId"];?>';}">
                        <button type="button" class="btn btn-success"><i class="fa fa-external-link fa-fw"></i>Request Order</button></a>                            </td>
                          </tr>
                        </table>                                    
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
            </form>
                    

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
