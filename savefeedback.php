<?php
 $name=$_POST["name"];
 $emailid=$_POST["emailid"];
 $mobno=$_POST["mobno"];
 $message=$_POST["message"];
 date_default_timezone_set("Asia/Kolkata");
 $dt=date("d/m/Y h:i:s A");
 include "connect.php";
 $cmd="Insert into tbl_feedback(name,mobno,emailid,message,fdt
) values('$name','$mobno','$emailid','$message','$dt')";
 $x=MySQLi_Query($con,$cmd);
 if($x)
 {
	 include "MyClass/smssender.php";
	 $ss=new SMSSender();
	 $ss->sendSMS($mobno,"Hi $name, Thanks for given feedback, and juch my skill  we will contact you shortly.\n From- CICST");

	echo "<script>alert('Your feedback saved succesfully.');window.location.href='index.php';</script>";
 }
 else
	 echo "<script>alert('Sorry! Unable to save feedback.');window.location.href='index.php';</script>";
?>
