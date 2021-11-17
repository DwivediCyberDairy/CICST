<html lang="en_US">
<head>
<?php include "BSlinks.html";?>
</head>
<body>
<div class="containner">
<?php include "header.html";?>
<div class="row"style="min-height:400px;">
<div class="col-sm-2"></div>
<div class="col-sm-8">
<div class="row"style="min-height:350px;margin-top:20px;">
<div class="col-sm-2"></div>
<div class="col-sm-8"style="background-color:pink;border:1px solid #556B2F;">
<div class="row"style="min-height:350px">
<div class="col-sm-1"></div>
<div class="col-sm-10"style="background-color:#98FB98;">
<center><h3 style="background-color:#FFE4B5;"><p style="color:green;">☻☺</p>-Feedback-<p style="color:green;">☺☻</p></h3></center><hr style="background-color:blue;">
<form action="savefeedback.php" method="post">
NAME : <input type="text" name="name"placeholder="Please fill your name"class="form-control" required="ture"/>
MOBILE NO : <input type="number" name="mobno"placeholder="your contact number"class="form-control"required="ture"/>
Email : <input type="email" name="emailid"placeholder="Email Id"class="form-control" required="ture"/>
Message :<textarea class="form-control" name="message" placeholder="Type your message here..." rows="4" style="margin-bottom:4px;" required="ture"></textarea><br/>
<center><input type="submit" name="btnfbsave" value="submit" class="btn btn-primary"/>&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" name="btnfbcancel" value="cancel" class="btn btn-danger"/></center>
</form>
</div>
<div class="col-sm-1"></div>

</div>
<div class="col-sm-2"></div>
</div>
</div>
<div class="col-sm-2"></div>
</div>

</div>
</div>
<?php include "footer.html"; ?>
</body>
</html>