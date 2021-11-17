:<?php include "header.php"; ?>
<!-- Main part -->
 <div class="container-fluid">
<div class="row"style="min-height:300px">
<div class="col-sm-3"></div>
<div class="col-sm-6"style="background-color:#87CEFA;margin-top:50px;">
<h3 style="background-color:#FFDAB9;text-align:center;margin-top:10px;color:blue;">Notification_event</h3><hr style="background-color:blue;border:2px solid #FF1493;">
<form action="eventsmgmt.php" method="post">
<textarea class="form-control" name="message" placeholder="Type your information here..." rows="4" required="true"style="margin-bottom:8px;"></textarea><br/>
<center>
<input type="submit" name="btn" value="Save"class="btn btn-success"/>
</center>
</form>
</div>
<div class="col-sm-3"></div>
</div>

<!-- Start: To show Notification -->
  <div class="row" style="background-color:pink;color:white;padding:5px;margin:5px;min-height:250px;">
  <div classs="col-sm-12">
   <?php include "../connect.php"; ?>
   <table border='1'>
    <tr>
	  <th>Sno.</th><th>Notification Message</th><th>Added On</th><th>Manage</th></tr>
	  <?php
	   $cmd="Select *from Tbl_Notificaction";
	   $res=MySQLi_Query($con,$cmd);
	   while($x=MySQLi_fetch_assoc($res))
	   {
		   $lnk=$x["NotificationId"];
		   echo "<tr><td>".$x["NotificationId"]."</td><td>".$x["NotificactionMsg"]."</td><td>".$x["NDT"]."</td><td><a class='btn btn-danger' href='deletenoti.php?nid=$lnk'>Delete</a></td></tr>";
	   }
	   echo "</table>";
	  ?>
  </div>
  </div>

  
<!-- End: To show Notification -->
</div>
<?php include "footer.html"; ?>
<?php
  if(isset($_POST["btn"]))
  {
	  $msg=$_POST["message"];
	   date_default_timezone_set("Asia/Kolkata");
	   $d=date("d/m/Y h:i:s A");
	   $cmd="insert into Tbl_Notificaction(NotificactionMsg,NDT) values('$msg','$d')";
	   include "../connect.php";
	   $x=MySQLi_Query($con,$cmd);
	   if($x)
		   echo "<script>alert('Notification saved successfully.');</script>";
	   else
		   echo "<script>alert('Sorry! we are unable to save Notification message.');</script>";
	   
	   
  }
  
?>
