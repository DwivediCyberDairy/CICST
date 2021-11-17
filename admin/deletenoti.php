<?php
$id=$_GET["nid"];
echo $id;
include "../connect.php";
$cmd="delete from tbl_notificaction where NotificationId=$id";
$x=MySQLi_Query($con,$cmd);
if($x)
	 echo "<script>alert('Notification deleted successfully.');window.location.href='eventsmgmt.php';</script>";
 else
	 echo "<script>alert('Unable to delete notification');window.location.href='eventsmgmt.php';</script>";
?>