<?php include "header.php"; ?>
<!-- Main part -->
 <div class="container-fluid">
<div class="row"style="min-height:300px">
<div class="col-sm-3"></div>
<div class="col-sm-6"style="background-color:#87CEFA;margin-top:50px;">
<h3 style="background-color:#FFDAB9;text-align:center;margin-top:10px;color:blue;">☺☻Change_Password☻☺</h3><hr style="background-color:blue;border:2px solid #FF1493;">
<form action="changepassword.php" method="post">
<input type="password" name="pwd" placeholder="--your current password--" class="form-control" required="true"style="margin-bottom:10px;"/>
<input type="password" name="npwd" placeholder="--expected new password--"class="form-control" style="margin-bottom:10px;"/>
<input type="password" name="cnpwd" placeholder="--Confiorm new password--"class="form-control"/>
<br/> 
<center><input type="submit" name="btnchange" value="Change Password" class="btn btn-primary"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" name="updpwd" value="reset" class="btn btn-success"/></center>
</form>
<div class="col-sm-3"></div>
</div>
</div>
</div>
<?php include "footer.html"; ?>

<?php
 if(isset($_POST["btnchange"]))
 {
	 $pass=$_POST["pwd"];
	 $npass=$_POST["npwd"];
	 $cnpass=$_POST["cnpwd"];
	 if($npass==$cnpass)
	 {
		 $cmd="Update tbl_login set Pass='$npass' where Pass='$pass'";
		 include "../connect.php";
		 $x=MySQLi_Query($con,$cmd);
		 if($x)
			 echo "<script>alert('Your passsword changed successfully.');</script>";
		 else
			 echo "<script>alert('Invalid current password.');</script>";
	 }
	 else
		 echo "<script>alert('Confirm password and new password in not matching.');</script>";
 }
?>
