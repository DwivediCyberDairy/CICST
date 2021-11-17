<?php include "header.php"; ?>
<div class="row" style="margin:15px;min-height:30px;padding:8px;">
<div class="col-sm-12 form-control btn btn-success text-center" style="font-size:20px;">
Feedback Management
</div>
</div>
<div class="row" style="min-height:400px;margin:10px 5px;">
 <div class="col-sm-12" style="padding:5px; background-color:white;">
  <div class="row h5" style="background-color:black;color:white;margin: 0px 5px;min-height:30px;">
    <div class="col-sm-1 text-center">FId</div>
	<div class="col-sm-2 text-center">Name</div>
	<div class="col-sm-2 text-center">Mobile.no</div>
	<div class="col-sm-2 text-center">EmailId</div>
	<div class="col-sm-3 text-center">Message</div>
	<div class="col-sm-2 text-center">DateTime</div>
  </div>

    <?php
	  // Database code starts from here
	    include "../connect.php";
		$cmd="select *from tbl_feedback";
		$result=MySQLi_Query($con,$cmd);
		while($x=MySQLi_fetch_assoc($result))
		{
			echo "<div class='row' style='min-height:28px;'>";
			echo "<div class='col-sm-1'>".$x["fid"]."</div>";
			echo "<div class='col-sm-2'>".$x["name"]."</div>";
			echo "<div class='col-sm-2'>".$x["mobno"]."</div>";
			echo "<div class='col-sm-2'>".$x["emailid"]."</div>";
			echo "<div class='col-sm-3'>".$x["message"]."</div>";
			echo "<div class='col-sm-2'>".$x["fdt"]."</div></div>";
		}
		  // database code ends from here
	?>

 </div>
</div>
<?php include "footer.html"; ?>
