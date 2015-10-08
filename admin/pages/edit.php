<?php
include("connect.php");
include("session.php");

$id = $_GET['orderId'];

  if(isset($_POST["submit"]))
    {
        $paperTopic        = $_POST['paperTopic'];
        $paperSubject      = $_POST['paperSubject'];
        $languageStyle     = $_POST['languageStyle'];
        $typeOfWork        = $_POST['typeOfWork'];
        $paperStyle        = $_POST['paperStyle'];
        $level             = $_POST['level'];        
        $numberOfPages     = $_POST['numberOfPages'];
        $numberOfsources   = $_POST['numberOfsources'];
        $instructions      = $_POST['instructions'];  

    $sql = ("UPDATE `order` SET 
        paperTopic          = '$paperTopic',
        paperSubject        = '$paperSubject',
        languageStyle       = '$languageStyle',
        typeOfWork          = '$typeOfWork',
        paperStyle          = '$paperStyle',
        level               = '$level',
        numberOfPages       = '$numberOfPages',
        numberOfsources     = '$numberOfsources',
        instructions        = '$instructions'
        WHERE orderId = '$id'");
    $query=mysql_query($sql) or mysql_error();  
 
    if (!$query) {
        echo "error" . mysql_error();
    } 

    else {
     echo "<script> alert('Order Successfully Updated !'); </script>";        
                }
    }
    ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin | CustomWritingPros</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- Admin Skins. Choose a skin from the css/skins 
    folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
    <?php include('includes/header.php'); ?>
      <!-- Left side column. contains the logo and sidebar -->

    <?php include('includes/sidebar.php'); ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Admin
            <small>Edit Order</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Order</a></li>
            <li class="active">Edit</li>
          </ol>
        </section>
        <hr/>
        <section class="content">
        <div id = "viewOrder" style="margin-left:2%">

               <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
            <div style="padding-left:3%;">
            <div id="posted_orders">
           <form id="Update" method="POST" action="">
                <?php
                    $sql = "SELECT * FROM `order` WHERE orderId = '$id'";
                    $result = mysql_query($sql);
                    $check = mysql_num_rows($result);
                    if ($check<1) {
                        echo "There are no posted orders at the monent";
                    }
                    while
                    ($row=mysql_fetch_assoc($result)){
                    ?>
                    <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <b>Order Id:</b> <?php echo $id;?>
                                    </a>
                                </h4>
                            </div>
               
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <table align="left" class="table table-hover" style = "table-layout:fixed;">
                          <tr style="margin-bottom:0%">
                            <td><b>Paper Topic:</b></td><td> <input type="text" name="paperTopic" class = "form-control" id="paperTopic" value="<?php echo $row['paperTopic'];?>"></td>
                            <td><b>Paper Subject:</b></td><td> <input type="text" name="paperSubject" class = "form-control" id="paperSubject" value="<?php echo $row['paperSubject'];?>"></td>
                          </tr>
                          <tr style="margin-bottom:0%">
                            <td><b>Language Style:</b></td><td> <input type="text" name="languageStyle" class = "form-control" id="languageStyle" value="<?php echo $row['languageStyle'];?>"></td>
                            <td><b>Type Of Work:</b></td><td> <input type="text" name="typeOfWork" class = "form-control" id="typeOfWork" value="<?php echo $row['typeOfWork'];?>"></td>
                          </tr>
                          <tr style="margin-bottom:0%">
                            <td><b>Paper Style:</b></td><td> <input type="text" name="paperStyle" class = "form-control" id="paperStyle" value="<?php echo $row['paperStyle'];?>"></td>
                            <td><b>Level:</b></td><td> <input type="text" name="level" class = "form-control" id="level" value="<?php echo $row['level'];?>"></td>
                          </tr>
                          <tr style="margin-bottom:0%">
                            <td><b>No. of Pages:</b></td><td> <input type="text" name="numberOfPages" class = "form-control" id="numberOfPages" value="<?php echo $row['numberOfPages'];?>"></td>
                            <td><b>No. of Sources:</b></td><td> <input type="text" name="numberOfsources" class = "form-control" id="numberOfsources" value="<?php echo $row['numberOfsources'];?>"></td>
                          </tr>
                          <tr style="margin-bottom:0%">
                            <td style ="word-wrap: break-word;"><b>Date Posted:</b></td><td><b><?php echo $row['datePosted'];?></b></td>
                            <td><b>Amount:</b></td><td> <?php echo $row['total'];?></td>
                          </tr>
                          <tr>
                            <td style = "text-align:left;">Instructions:</td>
                            <td colspan = "3" style = "text-align:left;"><textarea name="instructions" id="instructions" class="form-control" value = ""><?php echo $row['instructions'];?></textarea></td>
                            </tr>
                          <tr class = "danger">
                            <td colspan = "4" style = "text-align:center;"><b> DeadLine:<?php echo $row['deadline'];?></b></td>
                          </tr>  
                            <td colspan = "4" style = "text-align:center;">
                        <button type="submit" class="btn btn-success" name="submit"><i class="fa fa-check-square-o fa-fw"></i> Update</button>

                            </td>
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
    </div> 



        </div>
        </section>
        <!-- Main content -->

      </div><!-- /.content-wrapper -->
    <?php include('includes/footer.php'); ?>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>