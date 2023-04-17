<link href="../css/style.css" rel="stylesheet" type="text/css">
<?php
include'../header.php';
?>
<div id="middle_1" style="margin-right:300px">
<br />
<h1 align="center" class="color">Add facilities for children</h1>

<form action="facilitychild2.php" method="post">
<table align="center" class="color">
<tr>
<td>Education</td><td><select name="t1">
						<option>secondary</option>
						<option>primary</option>
                        </select>

</td></tr>
<tr>
<td>Clothes</td><td><select name="t2">
<option>summer</option>
<option>winter</option>
 </select></td></tr>
<tr>
<td>Food</td><td><select name="t3">
<option>breakfast</option>
<option>lunch</option>
<option>dinner</option>
</select></td></tr>
<tr>
<td>Games</td><td><input type="text" name="t4"></td></tr>
<tr>
<td>Medicines</td><td><input type="text" name="t5"></td></tr>


<td><input type="submit" value="submit" /></td><td><input type="reset" value="reset" /></td>
</tr></table></form>
</div>
<hr>
<?php
include'../footer.php';
?>