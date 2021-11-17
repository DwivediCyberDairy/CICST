<html>
<head><title>mycicst</title>
<style>
#fb:hover
{
	background-color:lime;
}
</style>
<?php include"BSlinks.html"; ?>
<script>
var images=["cleanwatter.jpg","stgrp1.jpg","camp.jpg","stgrp2.jpg","12.jpg","stgrp3.jpg","5.jpg","10.jpg","stgrp4.jpg","13.jpg","comp.jpg","pk.jpg","stgrp5.jpg","lab3.jpg","lib2.jpg","stgrp6.jpg","9.jpg","16.jpg"];
var i=0;
function next()
{
var img=document.getElementById("img");
i++;
if(i==images.length)
{
	i=0;
}
img.src="images/"+images[i];
}
function pev()
{
var img=document.getElementById("img");

if(i==0)
{
	i=images.length;
}
i--;
img.src="images/"+images[i];
}
function move()
{
	var img=document.getElementById("img");
	i++;
	if(i==images.length)
	{
		i=0;
	}
	window.setTimeout("move()",3000);
	img.src="images/"+images[i];
	
	}
</script>
</head>
<body onload="move()">
<div class="container-fluid">
<!--Including header with menu,logo,websitename-->
<?php include "header.html";?>
<!--start slider-->
<div class="row"style="min-height:450px">
<div class="col-sm-12"style="background-color:#A9F5E1;padding:0px;border:4px solid #ff00ff;">
<img id="img" src="cleanwatter.jpg" height="450px" width="100%"/><button
<button onclick="pev()"style="height:70px;width:30px;font-size:30px;position:absolute;top:150px;left:0px;"><</button>
<button onclick="next()"style="height:70px;width:30px;font-size:30px;position:absolute;top:155px;left:97.5%;">></button>

</div>
<!--slider end-->

</div>
<div class="row" style="min-height:350px;">
<div class="col-sm-3"style="background-color:#A9F5F2;">
<a  id="fb"href="studydownload.php"><button id="btndown" class="nav-item"class="btn btn-primary" style="background-color:lime;color:blue;position:absolute;top:2px;left:55%;z-index:999">STUDY_MATREAL</button></a>
<marquee direction="up" height="350px" onmouseover="stop()" onmouseout="start()">
<?php
 include "connect.php";
 $cmd="Select *from Tbl_Notificaction order by NotificationId desc";
 $res=MySQLi_Query($con,$cmd);
 echo "<ul>";
 while($x=MySQLi_fetch_assoc("$res"))
 {
	 echo "<li style='color:white;font-size:18px;'>".$x["NotificactionMsg"]." Posted On: ".$x["NDT"]."</li>";
 }
 echo "</ul>";
?>
</marquee>
</div>
<div class="col-sm-9"style="background-color:white;">
<div class="row"style="min-height:80px;">
<div class="col-sm-12 text-justify"style="background-color:#F8ECE0;font-size:17px;font-family:Times New Roman;"><h3>Introduction:-</h3>Chitrakoot Institute of Computer Science & technology is a premier institution affiliated with 'Makahanlal chaturvedi Patrakarita Evam Sanchar Vishwvidyalaya Bhopal'Situated in Chitrakoot District Of UP. this portal helps to store and manage college information like students records,teacher & staff profiles,examination schedules,time table,syllabus and curriculum students Performance record,school events etc.this portal must have control over all the issues of a CICST karwi, chitrakoot. 
</div>
</div>
<div class="row"style="min-height:90px;">
<div class="col-sm-8 text-justify"style="background-color:#F8ECE0;font-size:17px;font-family:Times New Roman;">It should mainly deals with the student's administration, admission, academics results, fee details, etc. Only the administrator, would view/edit the
details."CICST" can manage and update their website in an easy,cost effective manner, admin considering their wide range of student information, extensive search area and the need to provide to a wide educational application. 
</div>
<div class="col-sm-4 text-justify"style="background-color:pink;padding:0px;border:1px solid blue;font-size:15px;"><img src="images/director.jpg"height="80px"width="50%;"/><img src="images/dvdirector.jpg"height="80px"width="50%;"border="1px solid aqua"/><br/>Dr-mr.R.S jaishwal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dpt.dr-mr.Ashok kumar
</div>
</div>
<div class="row"style="min-height:80px;">
<div class="col-sm-12 text-justify"style="background-color:#F8ECE0;font-size:17px;font-family:Times New Roman;">This portal can be defined as a portal that stores and presents materials for online learning, training, performance assessment. today's education scenario is rapidly changing and demanding. The system demands greater levels of communication between student, faculty members and staff menber to have optimum use of resources. this project is useful for visitors, college students & teacher. Visitors can get information of college, campus, courses, etc. which helps him to select the college.
</div>
</div>

</div>
</div>
<!--including footer and copyright-->
<?php include "footer.html";?>
</div>
<!-- Start: Enquiry Popup -->
<button id="btneq" class="btn btn-primary" style="position:fixed;top:250px;left:-25px;transform:rotate(90deg);z-index:999" onclick="managePopup(this,dveq)">Enquiry</button>
<div id="dveq" style="width:250px;height:360px;background-color:lightblue;position:absolute;top:200px;left:10px;border-radius:10px;border:1px solid maroon;padding:10px;display:none;">
<p class="text-center">May I help you?</p>
<hr style="background-color:black;margin:-14px 20px 8px 20px;padding:0px;"/>
<form action="saveEnquiry.php" method="post">
<input type="text" class="form-control" name="name" placeholder="Name" style="margin-bottom:8px;"  required="ture"/>
<input type="email" class="form-control" name="email" placeholder="Email" style="margin-bottom:8px;"  required="ture"/>
<input type="number" class="form-control" name="mobno" placeholder="Mobile No" style="margin-bottom:8px;" />
<textarea class="form-control" name="message" placeholder="Type your message here..." rows="4" style="margin-bottom:8px;" required="ture"></textarea>
<input type="submit" value="Submit" class="btn btn-success form-control" />

</form>
</div>
 <a  id="fb"href="feedbackform.php"><button id="btnfdb" class="nav-item"class="btn btn-primary" style="background-color:#1ABC9C  ;color:white;position:fixed;top:500px;left:95%;transform:rotate(90deg);z-index:999">Feedback</button></a>
 
 <script>
 function managePopup(btn,dv)
 {
	 var status=dv.style.display;
	 if(status=="none")
		 dv.style.display="block";
	 else
		 dv.style.display="none";
 }
</script>
</body>
</html>
