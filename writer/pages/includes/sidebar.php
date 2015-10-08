            <div class="navbar-default sidebar" role="navigation" style="position:fixed;">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="postedOrders.php"><i class="fa fa-list-alt fa-fw"></i> Posted Orders<span class="label label-success pull-right"><div id = "postedOrders"></div></span></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-tasks fa-fw"></i> My Orders<span class="label label-primary pull-right"><div id = "myOrders"></div></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="pendingOrders.php">Pending Orders<span class="label label-danger pull-right"><div id = "pendingOrders"></div></span></a>
                                </li>
                                <li>
                                    <a href="completedOrders.php">Completed Orders<span class="label label-success pull-right"><div id = "completedOrders"></div></span></a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="revision.php"><i class="fa fa-briefcase fa-fw"></i> Revision<span class="label label-danger pull-right"><div id = "revision"></div></span></a>
                        </li>
                        <li>
                            <a href="newMessages.php?page=1"><i class="fa fa-comments-o fa-fw"></i> New Messages<span class="label label-primary pull-right"><div id = "newMessages"></div></span></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-money fa-fw"></i> Payment Stats<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="pendingPayment.php">Pending Payments</a>
                                </li>
                                <li>
                                    <a href="eligiblePayment.php">Eligible Payments</a>
                                </li>
                                <li>
                                    <a href="completedPayment.php">Completed payments</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="account.php"><i class="fa fa-briefcase fa-fw"></i> Customer's Rating</a>
                        </li>
                        <li>
                            <a href="profile.php"><i class="fa fa-user fa-fw"></i> Total  Earning <span class="label label-success pull-right">USD 1879</span></a>
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
        <!-- Processing Posted Oders-->
        <script type="text/javascript">
        var resreshId = setInterval(function()
        {
        $('#postedOrders').show().load('http://localhost/customwritingpros/writer/pages/includes/process/postedOrders.php');

        }, 500
            );
        </script>
        <!-- Processing Posted Oders-->
        <script type="text/javascript">
        var resreshId = setInterval(function()
        {
        $('#myOrders').show().load('http://localhost/customwritingpros/writer/pages/includes/process/myOrders.php');

        }, 500
            );
        </script>
        <!-- Processing Pending Oders-->
        <script type="text/javascript">
        var resreshId = setInterval(function()
        {
        $('#pendingOrders').show().load('http://localhost/customwritingpros/writer/pages/includes/process/pendingOrders.php');

        }, 500
            );
        </script>
        <!-- Processing Completed Oders-->
        <script type="text/javascript">
        var resreshId = setInterval(function()
        {
        $('#completedOrders').show().load('http://localhost/customwritingpros/writer/pages/includes/process/completedOrders.php');

        }, 500
            );
        </script>
        <!-- Processing Revision-->
        <script type="text/javascript">
        var resreshId = setInterval(function()
        {
        $('#revision').show().load('http://localhost/customwritingpros/writer/pages/includes/process/revision.php');

        }, 500
            );
        </script>
        <!-- Processing Posted Oders-->
        <script type="text/javascript">
        var resreshId = setInterval(function()
        {
        $('#newMessages').show().load('http://localhost/customwritingpros/writer/pages/includes/process/newMessages.php');

        }, 500
            );
        </script>