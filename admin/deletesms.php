<?php
$id=$_GET["nid"];
echo $id;
include "../connect.php";
$cmd="delete from tbl_sms where sno=$id";
$x=MySQLi_Query($con,$cmd);
if($x)
	 echo "<script>alert('SMS deleted successfully.');window.location.href='sendsms.php';</script>";
 else
	 echo "<script>alert('Unable to delete SMS');window.location.href='sendsms.php';</script>";
?>