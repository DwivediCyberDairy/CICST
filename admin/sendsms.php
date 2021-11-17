<?php include "header.php"; ?>
<!-- Main part -->
 <div class="container-fluid">
<div class="row"style="min-height:300px">
<div class="col-sm-3"></div>
<div class="col-sm-6"style="background-color:#87CEFA;margin-top:50px;">
<h3 style="background-color:#FFDAB9;text-align:center;margin-top:10px;color:blue;">Send_SMS</h3><hr style="background-color:blue;border:2px solid #FF1493;">
<form action="sendsms.php" method="post">
<input type="number" name="mobno" placeholder="--fill mobile number--"class="form-control"style="margin-bottom:10px;" required="true"/>
<textarea class="form-control" name="message" placeholder="Type your information here..." rows="5" style="margin-bottom:8px;" required="true"></textarea>
<center><input type="submit" name="btn" value="SendSMS"class="btn btn-success"/></center>
</form>
</div>
<div class="col-sm-3"></div>
</div>
<?php 
if(isset($_POST["btn"]))
{
$mob=$_POST["mobno"];	
$msg=$_POST["message"];
// sms API start
include "../MyClass/smssender.php";
$s=new SMSSender();
$x=$s->sendSMS($mob,$msg);
if($x==true)
	echo "<script>alert('SMS sent successfully');</script>";
else
	 echo "<script>alert('Unable to send SMS');</script>";

//sms API end
}
?>

<div class="row" style="background-color:pink;color:white;padding:5px;margin:5px;min-height:250px;margin-top:10px;">
<div class="col-sm-2"></div>
  <div classs="col-sm-8">
   <?php include "../connect.php"; ?>
   <table border='1'>
    <tr>
	  <th>Sno.</th><th>mobileno</th><th>sms</th><th>Datetime</th><th>Manege</th></tr><hr style="border:2px solid cyan;">
	  <?php
	   $cmd="select *from tbl_sms";
	   $res=MySQLi_Query($con,$cmd);
	   while($x=MySQLi_fetch_assoc($res))
	   {
		   $lnk=$x["sno"];
		   echo "<tr><td>".$x["sno"]."</td><td>".$x["mobno"]."</td><td>".$x["sms"]."</td><td>".$x["smsdt"]."</td><td><a class='btn btn-danger' href='deletesms.php?nid=$lnk'>Delete</a></td></tr>";
	   }
	   echo "</table>";
	   
	  ?>
	  
  </div>
  <div class="col-sm-2"></div>
  </div>

  
<!-- End: To show Notification -->
</div>
<?php include "footer.html"; ?>
<?php
  if(isset($_POST["btn"]))
  {
	$mobno=$_POST["mobno"];	 
	 $msg=$_POST["message"];
	   date_default_timezone_set("Asia/Kolkata");
	   $d=date("d/m/Y h:i:s A");
	   $cmd="insert into tbl_sms(mobno,sms,smsdt) values('$mobno','$msg','$d')";
	   include "../connect.php";
	   $x=MySQLi_Query($con,$cmd);
	   if($x)
		   echo "<script>alert('sms saved successfully.');</script>";
	   else
		   echo "<script>alert('Sorry! we are unable to save sms message.');</script>";
	   
	   
  }
  
?>