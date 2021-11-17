<?php include "header.php"; ?>
<!-- Main part -->
<h2 class="text-center"style="color:blue;">STAFF_Member</h2><hr>
<form action="addstaff.php" method="post" enctype="multipart/form-data">
Name : <input type="text"name="name"class="form-control"placeholder="name" required="ture"/><br/>
Qulification : <select name="qualification" class="form-control"  required="ture">
<option value="qulification">--select qualification--</option>
<option>10th</option>
<option>12th</option>
<option>BA</option>
<option>BCA/B.ed</option>
<option>MCA/B.ed</option>
<option>B.Sc/PGDCA</option>
<option>M.Sc(IT)</option>
<option>B.E</option>
</select>
Designation : <select name="designation" class="form-control"  required="ture">
<option value="designation">--select designation--</option>
<option>Director</option>
<option>Dpt.director</option>
<option>Lecturer</option>
<option>Teacher</option>
<option>Labrarian</option>
<option>Technician</option>
<option>Peon</option>
<option>Pantry</option>
</select>
Email : <input type="email" name="email"class="form-control"placeholder="email"  required="ture"/>
<br/>
Photo : 
<input type="file" name="staffpic"/><br/><br/>
<center><button type="submit" name="btn"class="btn btn-success">save</button> &nbsp;&nbsp;&nbsp;&nbsp;<button type="reset" class="btn btn-danger">Reset</button> </center>
</form>
<?php include "footer.html"; ?>