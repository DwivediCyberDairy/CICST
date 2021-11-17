<?php
 $title=$_POST["title"];
 
 // File Upload code starts from here
 $file=$_FILES["book"];
 $fname=$file["name"];
 $tmppath=$file["tmp_name"];
 $destpath="../studybook/".$fname;
 move_uploaded_file($tmppath,$destpath);
 // End File upload code ends from here
 // Database Connectivity...
 include "../connect.php";
 date_default_timezone_set("Asia/Kolkata");
 $dt=date("d/m/Y h:i:s A");
 $cmd="insert into tbl_studymaterial(title,filepath,studydate)values('$title','$destpath','$dt')";
 $x=MySQLi_Query($con,$cmd);
 if($x)
	 echo "<script>alert('book added successfully.');window.location.href='studymatform.php';</script>";
 else
	 echo "<script>alert('Unable to save book details..');window.location.href='studymatform.php';</script>";
 
 
?>