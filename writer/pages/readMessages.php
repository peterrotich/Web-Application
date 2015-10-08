<?php
include("connect.php");
include("session.php");
$val = 1/3;
//new messages
$sql6 = "SELECT * FROM `messaging` WHERE recipient = '$session_id' AND messageStatus = 'read';";
$result6 = mysql_query($sql6);
$count6 = mysql_num_rows($result6);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Custom Writing Pros || New Message</title>

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
                        <h1 class="page-header">Writer Panel - <small>Old Messages</small></h1>
                        <a href="readMessages.php"><span class="label label-primary pull-right">Old Messages (<?php echo $count6;?>)</span></a>   
                    </div>
                    <table class = "table" align="center">
                    <tr>
                    <th>Id</th>
                    <th>Sender</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Action</th>
                    </tr>
                    <?php
                    $sql = "SELECT * FROM `messaging` WHERE messageStatus = 'read' AND recipient = '$session_id';";
                    $result = mysql_query($sql);
                    while($row=mysql_fetch_assoc($result)){
                    ?>
                    <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['sender'];?></td>
                    <td><?php echo $row['subject'];?></td>
                    <td width = "400px"><?php echo $row['message'];?></td>
                    <td>

                    <a href="JavaScript:if(confirm('Mark This Message as UnRead?')==true){window.location='markAsUnRead.php?messageId=<?=$row["id"];?>';}">
                    <i class="fa fa-rotate-right fa-fw"></i></a>

                    <a href="JavaScript:if(confirm('Reply this message?')==true){window.location='replyOldMessage.php?messageId=<?=$row["id"];?>';}">
                    <i class="fa fa-reply-all fa-fw"></i></a>

                    <a href="JavaScript:if(confirm('Open conversation?')==true){window.location='conversationOld.php?messageId=<?=$row["id"];?>';}">
                    <i class="fa fa-list-alt fa-fw"></i></a>

                    <a href="JavaScript:if(confirm('View this order?')==true){window.location='deleteOldMessage.php?messageId=<?=$row["id"];?>';}">
                    <i class="fa fa-times-circle fa-fw"></i></a>

                    </td>
                    </tr>
                    <?php
                    }
                    ?>
                    <tr>
                    <td colspan = "5" style = "text-align:center;">
                    <?php
                    $check = mysql_num_rows($result);
                    if ($check<1) {
                        echo "There are no old messages at the monent";
                    }
                    ?>
                    </td>
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

</body>

</html>
