<?php include "header.php"; ?>
<div class="row" style="margin:15px;min-height:30px;padding:8px;">
<div class="col-sm-12 form-control btn btn-success text-center" style="font-size:20px;">
Enquiry Management
</div>
</div>
<div class="row" style="min-height:400px;margin:10px 5px;">
 <div class="col-sm-12" style="padding:5px; background-color:white;">
  <div class="row h5" style="background-color:black;color:white;margin: 0px 5px;min-height:30px;">
    <div class="col-sm-1 text-center">EnquiryId</div>
	<div class="col-sm-2 text-center">Name</div>
	<div class="col-sm-2 text-center">EmailId</div>
	<div class="col-sm-2 text-center">Mobile No</div>
	<div class="col-sm-3 text-center">Message</div>
	<div class="col-sm-2 text-center">DateTime</div>
  </div>

    <?php
	  // Database code starts from here
	    include "../connect.php";
		$cmd="select *from tbl_enquiry";
		$result=MySQLi_Query($con,$cmd);
		while($x=MySQLi_fetch_assoc($result))
		{
			echo "<div class='row' style='min-height:28px;'>";
			echo "<div class='col-sm-1'>".$x["EnquiryId"]."</div>";
			echo "<div class='col-sm-2'>".$x["Name"]."</div>";
			echo "<div class='col-sm-2'>".$x["EmailId"]."</div>";
			echo "<div class='col-sm-2'>".$x["MobileNo"]."</div>";
			echo "<div class='col-sm-3'>".$x["Message"]."</div>";
			echo "<div class='col-sm-2'>".$x["Enquiry_DT"]."</div></div>";
		}
		  // database code ends from here
	?>

 </div>
</div>
<?php include "footer.html"; ?>
