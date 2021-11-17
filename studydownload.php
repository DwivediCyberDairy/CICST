<?php include "BSlinks.html";?>
<?php include "header.html";?>
<div class="row"style="min-height:200px;">
<div class="col-sm-3"></div>
<div class="col-sm-6 h3 "style="background-color:aqua;margin-top:10px;"><center style="background-color:pink;">Find Study_Book</center><hr style="background-color:blue;">
<table border="1" width="100%">
 <tr><th>Sno.</th><th>Title</th><th>Uploaded On</th><th>Download</th></tr>
 <?php
 include "connect.php";
 $x=MySQLi_Query($con,"Select *from tbl_studymaterial order by studyid desc");
 while($res=MySQLi_fetch_Assoc($x))
 {
	 $p=$res["filepath"];
	 echo "<tr><td>".$res["studyid"]."</td><td>".$res["title"]."</td><td>".$res["studydate"]."</td><td><a href='studybook/$p' >Go</a></td></tr>";
 }
 ?>
</table>
</div>
<div class="col-sm-3"></div>
</div>
<?php include "footer.html";?>