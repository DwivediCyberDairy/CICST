<?php
 $name=$_POST["name"];
 $email=$_POST["email"];
 $quali=$_POST["qualification"];
 $desig=$_POST["designation"];
 // File Upload code starts from here
 $file=$_FILES["staffpic"];
 $fname=$file["name"];
 $tmppath=$file["tmp_name"];
 $destpath="Staff Photo/".$fname;
 move_uploaded_file($tmppath,$destpath);
 // End File upload code ends from here
 // Database Connectivity...
 include "connect.php";
 date_default_timezone_set("Asia/Kolkata");
 $dt=date("d/m/Y h:i:s A");
 $cmd="Insert into  tbl_staff(Name,Qualification,Designation,EmailId,PhotoPath,Added_On) values('$name','$quali','$desig','$email','$destpath','$dt')";
 $x=MySQLi_Query($con,$cmd);
 if($x)
	 echo "<script>alert('Staff member added successfully.');window.location.href='staffmember.php';</script>";
 else
	 echo "<script>alert('Unable to save Staff member details..');window.location.href='staffmember.php';</script>";
 
 
?>