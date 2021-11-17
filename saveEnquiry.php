<?php
 $name=$_POST["name"];
 $email=$_POST["email"];
 $mobno=$_POST["mobno"];
 $message=$_POST["message"];
 date_default_timezone_set("Asia/Kolkata");
 $dt=date("d/m/Y h:i:s A");
 include "connect.php";
 $cmd="Insert into tbl_enquiry(	Name,MobileNo,EmailId,Message,Enquiry_DT) values('$name','$mobno','$email','$message','$dt')";
 $x=MySQLi_Query($con,$cmd);
 if($x)
 {
	 include "MyClass/smssender.php";
	 $ss=new SMSSender();
	 $ss->sendSMS($mobno,"Hi $name, Thanks for enquiry, we will contact you shortly.\n From- CICST");
      echo "<script>alert('Your enquiry saved succesfully.');window.location.href='index.php';</script>";
 }
 else
	 echo "<script>alert('Sorry! Unable to save enquiry.');window.location.href='index.php';</script>";
?>
