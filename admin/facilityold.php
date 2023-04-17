<link href="../css/style.css" rel="stylesheet" type="text/css">
<?php
include'../header.php';
?>
<div id="middle_1" style="margin-right:300px">
<br />
<h1 align="center" class="color">Add facilities for old</h1>

<form action="facilityold2.php" method="post">
<table align="center" class="color">

<tr>
<td>Clothes</td><td><select name="t1">
<option>summer</option>
<option>winter</option>
 </select></td></tr>
<tr>
<td>Food</td><td><select name="t2">
<option>breakfast</option>
<option>lunch</option>
<option>dinner</option>
</select></td></tr>

<tr>
<td>Medicines</td><td><input type="text" name="t3"></td></tr>


<td><input type="submit" value="submit" /></td><td><input type="reset" value="reset" /></td>
</tr></table></form>
</div>
<hr>
<?php
include'../footer.php';
?>