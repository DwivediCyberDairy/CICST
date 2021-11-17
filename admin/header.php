<?php
Session_Start();
if(!$_SESSION["adminid"])
 echo "<script>window.location.href='../login.php';</script>";
?>

<html>
 <head>
    <?php include "adminlinks.html"; ?>
	<style>
	  #menu
	  {
		  list-style-type:none;
		  padding-left:0px;
	  }
	  #menu li a
	  {
		  color:white;
		  font-size:20px;
		  text-decoration:none;
	  }
	  #menu li
	  {
		  background-color:blue;
		  padding:15px 10px;
		  border-bottom:1px solid black;
		  margin-bottom:10px;
	  }
	  #menu li:hover
	  {
		  background-color:maroon;
	  }
	</style>
 </head>
 <body>
 <div class="container-fluid">
<div class="row" style="min-height:120px;">
 <div class="col-sm-1"></div>
 <div class="col-sm-2">
  <img src="../images/cloggo.png" width="100%" height="120px" />
 </div>
 <div class="col-sm-8" style="background-color:navy;padding:0px;">
    <embed src="../images/banner.swf" width="100%" height="120px" />
 </div>
 <div class="col-sm-1"></div>
</div>

<div class="row" style="min-height:500px;">
 <div class="col-sm-1"></div>
 <div class="col-sm-2" style="background-color:#8A2BE2;">
 <ul id="menu">
    <li><a href="index.php">Home</a></li>
	<li><a href="eventsmgmt.php">Event Management</a></li>
	<li><a href="staffmember.php">Staff Members</a></li>
	<li><a href="enquirymgmt.php">Enquiry Management</a></li>
   <li><a href="feedbackmgmt.php">Feedback Management</a></li>
   	<li><a href="sendsms.php"style="background-color:green;color:#FFFF00;">Send_Sms</a></li>
	<li><a href="studymatform.php"style="background-color:green;color:#FFFF00;">Study_Material</a></li>
	<li><a href="changepassword.php">Change Password</a></li>
   	<li><a href="logout.php">Logout</a></li>
   </ul>
 </div>
 <div class="col-sm-8" style="background-color:#A9F5F2;">
   