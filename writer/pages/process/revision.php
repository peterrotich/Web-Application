<?php
include("connect.php");
include("session.php");
?>
<table class = "table" align="center" style="table-layout:fixed;">
                    <tr>
                    <th>Order Id</th>
                    <th>Paper Topic</th>
                    <th>No. of Pages</th>
                    <th>Amount</th>
                    <th>Deadline</th>
                    <th>Level</th>
                    <th>Action</th>
                    </tr>
                    <?php
                    $sql = "SELECT * FROM `order` WHERE orderStatus = 'revision' AND writerId = '$session_id';";
                    $result = mysql_query($sql);
                    while($row=mysql_fetch_assoc($result)){
                    ?>
                    <tr>
                    <td><?php echo $row['orderId'];?></td>
                    <td><?php echo $row['paperTopic'];?></td>
                    <td><?php echo $row['numberOfPages'];?></td>
                    <td><?php echo $row['total'];?></td>
                    <td><?php echo $row['deadline'];?></td>
                    <td><?php echo $row['level'];?></td>
                    <td>
                    
                    <a href="JavaScript:if(confirm('View this order?')==true){window.location='viewRevisionOrder.php?orderId=<?=$row["orderId"];?>';}">
                    <i class="fa fa-search-plus fa-fw"></i></a>

                    <a href="JavaScript:if(confirm('View this order?')==true){window.location='viewPendingOrder.php?orderId=<?=$row["orderId"];?>';}">
                    <i class="fa fa-upload fa-fw"></i></a>

                    </td>
                    </tr>
                    <?php
                    }
                    ?>
                    <tr>
                    <td colspan = "7" style = "text-align:center;">
                    <?php
                    $check = mysql_num_rows($result);
                    if ($check<1) {
                        echo "You have no orders for revision at the monent";
                    }
                    ?>
                    </td>
                    </tr>

                    </table>