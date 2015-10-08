<?php
$result = mysql_query("UPDATE registration SET onlineStatus = 'online' WHERE regId = '$session_id'");
if (!$result) {

echo "<script> alert('Reload This Page Please')</script>";

}
?>
<div style="float:right;position:fixed;width:100%;background-color:#e3f2fd;">
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.html">Custom Writing Pros</a>
</div>
<link rel="shortcut icon" href="img/icon.jpg" />
<ul class="nav navbar-top-links navbar-right">
    <!-- /.dropdown -->
    <li><a href="newOrder.php"><div id = "support"></div><i class="fa fa-shopping-cart fa-fw"></i> Place Order</a></li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-user fa-fw"></i> Hi Peter Rotich <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
            <li><a href="profile.php"><i class="fa fa-user fa-fw"></i> Client Profile</a>
            </li>
            <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
            </li>
            <li class="divider"></li>
            <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </li>
        </ul>
        <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->
</ul>
</div>