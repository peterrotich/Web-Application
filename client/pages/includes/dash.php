<?php
include("connect.php");
include("session.php");
//posted orders
$num = "SELECT * FROM `order` WHERE orderStatus = 'not taken' AND clientId = '$session_id';";
$res = mysql_query($num);
$coun = mysql_num_rows($res);
//orders in progress
$num1 = "SELECT * FROM `order` WHERE orderStatus = 'taken' AND clientId = '$session_id';";
$res1 = mysql_query($num1);
$coun1 = mysql_num_rows($res1);
//completed orders
$num2 = "SELECT * FROM `order` WHERE orderStatus = 'complete' AND clientId = '$session_id';";
$res2 = mysql_query($num2);
$coun2 = mysql_num_rows($res2);
//revision
$num3 = "SELECT * FROM `order` WHERE orderStatus = 'revision' AND clientId = '$session_id';";
$res3 = mysql_query($num3);
$coun3 = mysql_num_rows($res3);

?>
<div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-list-alt fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $coun;?></div>
                                    <div>Posted Orders</div>
                                </div>
                            </div>
                        </div>
                        <a href="postedOrders.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $coun1;?></div>
                                    <div>Orders In Progress</div>
                                </div>
                            </div>
                        </div>
                        <a href="pendingOrders.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-check-square-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $coun2;?></div>
                                    <div>Completed Orders</div>
                                </div>
                            </div>
                        </div>
                        <a href="completedOrders.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-money fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $coun3;?></div>
                                    <div>Revision</div>
                                </div>
                            </div>
                        </div>
                        <a href="eligiblePayment.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>