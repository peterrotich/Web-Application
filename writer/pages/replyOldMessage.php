<?php
include("connect.php");
include("session.php");
$id = $_GET['messageId'];

$sql7 = "SELECT * FROM `messaging` WHERE id = '$id'";
$result7 = mysql_query($sql7);
$row7=mysql_fetch_assoc($result7);
$recipient = $row7['sender'];

  if(isset($_POST["sendMessage"]))
    {
        $subject            = $_POST['subject'];
        $message            = $_POST['message'];


$sql = ("INSERT INTO `customwriting`.`messaging` (`sender`, `recipient`, `subject`, `message`, `messageStatus`) 
VALUES ('$session_id', '$recipient', '$subject', '$message', 'unread')");

$query=mysql_query($sql) or mysql_error();  
if (!$query) {
    echo "error:" . mysql_error();
}  
else {
 echo "<script> alert('Message Successfully Sent'); </script>";        
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

    <title>Custom Writing Pros || Reply Message</title>

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

        <div id="page-wrapper">
            <div class="container-fluid">
                    <!-- /.col-lg-12 -->
                    <!--Content-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Writer Panel - <small>Reply Message</small></h1>
            </div>
        </div>
            <div style="padding-left:3%;padding-top:3%; width:70%;">
            <div id="sendMessage">
            <form id = "sendMessage" name = "sendMessage" action="" method="POST">
                <?php
                    $sql = "SELECT * FROM `messaging` WHERE recipient = '$session_id' AND id = '$id'";
                    $result = mysql_query($sql);
                    $row=mysql_fetch_assoc($result)
                    ?>
                    <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    Recipient: <b><?php echo $row['sender'];?></b>
                                    </a>
                                </h4>
                            </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        Subject:
                        <input type = "text" style="width:98%" class = "form-control" name = "subject" id = "subject" placeholder = "Subject" value = "<?php echo $row7['subject']?>">
                        Message:
                        <textarea style="width:98%" class = "form-control" name="message" id="message" cols="45" rows="5" placeholder = "Message"></textarea>
                        <br>                              
                        
                        <button type="submit" name = "sendMessage" id = "sendMessage" class="btn btn-success"><i class="fa fa-send fa-fw"></i>Send</button>
                            
                    <div style = "float:right;padding-right:3%;">
                    <a href="JavaScript:if(confirm('Open conversation?')==true){window.location='conversationOld.php?messageId=<?=$row["id"];?>';}">
                    Go to Conversation</a>
                    </div>

                    </div>
                </div>
            </div>
            </form>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
                    <!--/Content-->
                </div>
                <!-- /.row -->
            </div>

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
