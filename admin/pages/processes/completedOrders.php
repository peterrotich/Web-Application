<?php
include("connect.php");
include("session.php");
?>
<table class = "table" align="center">
                    <tr>
                    <th>Order Id</th>
                    <th>Paper Topic</th>
                    <th>No. of Pages</th>
                    <th>Amount</th>
                    <th>Date Posted</th>
                    <th>Deadline</th>
                    <th>Level</th>
                    <th>Action</th>
                    </tr>
                    <?php
                    $sql = "SELECT * FROM `order` WHERE orderStatus = 'complete';";
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
                    <td><?php echo $row['level'];?></td>
                    <td>
                    
                    <a href="viewOrder.php?orderId=<?=$row["orderId"];?>">
                    <i class="fa fa-edit fa-fw" style="font-size:25px"></i></a>

                    <a href="deleteOrder.php?orderId=<?=$row["orderId"];?>">
                    <i class="fa fa-trash fa-fw" style="font-size:25px"></i></a>

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
                        echo "There are no completed orders at the monent";
                    }
                    ?>
                    </td>
                    </tr>
                    </table>