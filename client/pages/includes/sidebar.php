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
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i>Main Dashboard</a>
                        </li>
                        <li>
                            <a href="postedOrders.php"><i class="fa fa-list-alt fa-fw"></i> Posted Orders<span class="label label-success pull-right"><div id = "postedOrders"></div></span></a>
                        </li>
                        <li>
                            <a href="myOrders.php"><i class="fa fa-tasks fa-fw"></i> My Orders<span class="label label-primary pull-right"><div id = "myOrders"></div></span></a>
                        </li>
                        <li>
                            <a href="requests.php"><i class="fa fa-question-circle  fa-fw"></i> Requests<span class="label label-danger pull-right"><div id = "requests">6</div></span></a>
                        </li>
                        <li>
                            <a href="revision.php"><i class="fa fa-undo fa-fw"></i> Revision<span class="label label-danger pull-right"><div id = "revision"></div></span></a>
                        </li>
                        <li>
                            <a href="newOrder.php"><i class="fa fa-plus-circle fa-fw"></i> Post Order<span class="label label-success pull-right">new</span></a>
                        </li>
                        <li>
                            <a href="newMessages.php?page=1"><i class="fa fa-comments-o fa-fw"></i> New Messages<span class="label label-primary pull-right"><div id = "newMessages"></div></span></a>
                        </li>
                        <li>
                            <a href="doneOrders.php"><i class="fa fa-check-circle-o fa-fw"></i> Done Orders<span class="label label-primary pull-right"><div id = "doneOrders">78</div></span></a>
                        </li>
                        <li>
                            <a href="trash.php"><i class="fa fa-trash-o fa-fw"></i> Trash<span class="label label-primary pull-right"><div id = "trash">9</div></span></a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
        <!-- Processing Posted Oders-->
        <script type="text/javascript">
        var resreshId = setInterval(function()
        {
        $('#postedOrders').show().load('http://localhost/customwritingpros/client/pages/includes/process/postedOrders.php');

        }, 500
            );
        </script>
        <!-- Processing Posted Oders-->
        <script type="text/javascript">
        var resreshId = setInterval(function()
        {
        $('#myOrders').show().load('http://localhost/customwritingpros/client/pages/includes/process/myOrders.php');

        }, 500
            );
        </script>
        <!-- Processing Revision-->
        <script type="text/javascript">
        var resreshId = setInterval(function()
        {
        $('#revision').show().load('http://localhost/customwritingpros/client/pages/includes/process/revision.php');

        }, 500
            );
        </script>
        <!-- Processing Posted Oders-->
        <script type="text/javascript">
        var resreshId = setInterval(function()
        {
        $('#newMessages').show().load('http://localhost/customwritingpros/client/pages/includes/process/newMessages.php');

        }, 500
            );
        </script>