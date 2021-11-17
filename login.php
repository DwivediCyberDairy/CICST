<?php 
	Session_start();
	?>
<html>
<head>
<?php include "BSlinks.html";?>
<style>
#main
{
	min-height:250px;
	background:#E0F8F1;

}
#box
{
	width:30%;
	min-height:100px;
	background:pink;	
	border:2px solid #008080;
	margin-left:35%;
	margin-top:10px;
	font-size:20px;
	
}
#box sp:hover
{
	background-color:green;
}
</style>

</head>
<body>
<div class="container-fuid">
<?php include "header.html";?>
<div id="main" style="padding:0px;">
<div id="box"style="background-image:url(images/pkbanner.jpg "height="100px" width="100%";>
<h2 style="background-color:#73BAF1;text-align:center;color:blue;">login</h2><hr style="border:2px solid aqua;">
<form action="login.php" method="post">
&nbsp; &nbsp; 
<b>AdminName :</b><input type="text" name="adminid"class="form-control" placeholder="Admin Id" required="true"><br/>&nbsp; &nbsp; 
<b>Password :</b> <input type="password" name="pass" class="form-control"placeholder="input your passward" required="true">
<br/>
<span id="fpsp" style="margin-left:20px;"><a href="#">forget passward</a></span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
<button  type="submit" name="btn"class="btn btn-primary"style="font-size:15px;"style="margin-left:500px;">Login</button>
</form>
</div>
</div>
<?php include "footer.html" ;?>
</div>
<?php 
if(isset($_POST["btn"]))
{
$aid=$_POST["adminid"];
$pwd=$_POST["pass"];
include "connect.php";
$cmd="select * from  tbl_login where  AdminId='$aid' and pass='$pwd'";
$x=MySQLi_Query($con,$cmd);
$y=mysqli_num_rows($x);
if($y==1)
{
	// Creating Session...
	$_SESSION["adminid"]="admin";
	echo "<script>window.location.href='admin/index.php';</script>";
}
else
{
	echo "<script>alert('Invalid Id or Password.');</script>";
}
}
?>
</body>
</html>