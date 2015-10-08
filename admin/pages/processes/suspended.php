<?php
include("connect.php");
include("session.php");
?>
<table id="example" class = "table" align="center">
                    <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Nationality</th>
                    <th>Tel.</th>
                    <th>User</th>
                    <th>Action</th>
                    </tr>
                    <?php
                    $sql = "SELECT * FROM `registration` WHERE accountStatus = 'suspended';";
                    $result = mysql_query($sql);
                    while($row=mysql_fetch_assoc($result)){
                    ?>
                    <tr>
                    <td><?php echo $row['firstName'];?></td>
                    <td><?php echo $row['lastName'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['nationality'];?></td>
                    <th><?php echo $row['telephoneNumber'];?></th>
                    <td><?php echo $row['userType'];?></td>
                    <td>
                    
                     <a href="viewOrder.php?orderId=<?=$row["orderId"];?>">
                    <i class="fa fa-edit fa-undo text-success" style="font-size:25px"></i></a>


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
                        echo "There are no suspended users at the monent";
                    }
                    ?>
                    </td>
                    </tr>
                    </table>
                        <script type="text/javascript" charset = "UTF-8">
                            $(document).ready(function() {
                                $('#example').DataTable({
                                    "pagingType": "scrolling"
                                });
                            } );
                            </script>
