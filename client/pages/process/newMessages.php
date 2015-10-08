<?php
include("connect.php");
include("session.php");

$page = $_GET['page'];
if ($page =="" ||$page =="1") {
	$page1 = 0;
}
else
{
$page = ($page*5)-5;
}
?>
<table class = "table" align="center" style="table-layout:fixed;">
<tr>
<th>Id</th>
<th>Sender</th>
<th>Subject</th>
<th>Message</th>
<th>Action</th>
</tr>
<?php
$sql = "SELECT * FROM `messaging` WHERE messageStatus = 'unread' AND recipient = '$session_id' LIMIT $page1,5;";
$result = mysql_query($sql);
while($row=mysql_fetch_assoc($result)){
?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['sender'];?></td>
<td><?php echo $row['subject'];?></td>
<td width = "400px"><?php echo $row['message'];?></td>
<td>

<a href="JavaScript:if(confirm('Mark This Message as Read?')==true){window.location='markAsRead.php?messageId=<?=$row["id"];?>';}">
<i class="fa fa-check-square-o fa-fw"></i></a>

<a href="JavaScript:if(confirm('Reply this message?')==true){window.location='replyMessage.php?messageId=<?=$row["id"];?>';}">
<i class="fa fa-reply-all fa-fw"></i></a>

<a href="JavaScript:if(confirm('Open conversation?')==true){window.location='conversation.php?messageId=<?=$row["id"];?>';}">
<i class="fa fa-list-alt fa-fw"></i></a>

<a href="JavaScript:if(confirm('View this order?')==true){window.location='deleteMessage.php?messageId=<?=$row["id"];?>';}">
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
    echo "There are no new messages at the monent";
}
//counting number of page
$resl = mysql_query("SELECT*FROM messaging");
$cou = mysql_num_rows($resl);
$a = $cou/5;
$a = ceil($a);

echo "<br>"; echo "<br>";
for ($b=1; $b <=$a ; $b++) { 
	?><a href = "newMessages.php?page=<?php echo $b;?>"style = "text-decoration:none;"><?php echo $b," "; ?></a><?php
}
?>
</td>
</tr>
</table>