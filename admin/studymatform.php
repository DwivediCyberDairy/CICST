
<?php include "header.php"; ?>
<!-- Main part -->
<h2 class="text-center"style="color:blue;">STUDY_MATERIAL</h2><hr>
<div class="row"style="min-height:200px;">
<div class="col-sm-3"style="background-color:aqua;"></div>
<div class="col-sm-6"style="background-color:yellow;">
<form action="savestudymaterial.php" method="post" enctype="multipart/form-data">

Title : <select name="title" class="form-control" required="true">
<option value="title">-- Study book title--</option>
<option>fundamental</option>
<option>tally</option>
<option>os</option>
<option>linux</option>
<option>c programming</option>
<option>java programming</option>
<option>networkking</option>
<option>oracal(DBMS)</option>
<option>office package</option>
<option>personality devlopment</option>
</select>
<br/>
Photo : 
<input type="file" name="book" required="true"/><br/><br/>
<center><button type="submit" class="btn btn-success">save</button> &nbsp;&nbsp;&nbsp;&nbsp;<button type="reset" class="btn btn-danger">Reset</button> </center>
</form>
</div>
<div class="col-sm-3"style="background-color:aqua;"></div>
</div>
<?php include "footer.html"; ?>
