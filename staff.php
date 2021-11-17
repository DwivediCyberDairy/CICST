<html>
<head>
<?php include "BSlinks.html";?>
</head>
<body>
<div class="container-fuid">
<?php include "header.html";?>
<div class="row"style="min-height:300px;">
<div class="col-sm-12"style="background-color:#CEF6EC;">

<div class="row" style="margin:15px;min-height:30px;padding:8px;">
<div class="col-sm-12 form-control btn btn-primary text-center" style="font-size:30px;color:white;">
♥ Staff_Member And College Supported Team§ ♥
</div>
</div>
<div class="row" style="min-height:300px;margin:10px 5px;">
 <div class="col-sm-12" style="padding:5px; background-color:white;">
  <div class="row h5" style="background-color:black;color:white;margin: 0px 5px;min-height:30px;">
 
    <div class="col-sm-1 text-center">S.no</div>
	<div class="col-sm-2 text-center">Name</div>
	<div class="col-sm-1 text-center">Designation</div>
	<div class="col-sm-2 text-center">EmailId</div>
	<div class="col-sm-3 text-center">PhotoPath</div>
	<div class="col-sm-2 text-center">Added_On</div>
	<div class="col-sm-1 text-center">Qulification</div>
  </div>

    <?php
	  // Database code starts from here
	    include "connect.php";
		$cmd="Select *from tbl_staff";
		$result=MySQLi_Query($con,$cmd);
		while($x=MySQLi_fetch_assoc($result))
		{
			
			echo "<div class='row' style='min-height:28px;'>";
			echo "<div class='col-sm-1'>".$x["StaffId"]."</div>";
			echo "<div class='col-sm-2'>".$x["Name"]."</div>";
			echo "<div class='col-sm-1'>".$x["Designation"]."</div>";
			echo "<div class='col-sm-2'>".$x["EmailId"]."</div>";
			echo "<div class='col-sm-3'><img src='".substr($x["PhotoPath"],3)."' width='100px' height='120px' /></div>";
			echo "<div class='col-sm-2'>".$x["Added_On"]."</div>";
			echo "<div class='col-sm-1'>".$x["Qualification"]."</div>;</div>";
		}
		  // database code ends from here
	?>
</div>
</div>
</div>
</div>
<?php include "footer.html" ;?>
</div>
</body>
</html>