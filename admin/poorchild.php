<link href="../css/style.css" rel="stylesheet" type="text/css">
<?php
include'../header.php';
?>
<div id="middle_1" style="margin-right:300px">
<br />
<h1 align="center" class="color">Add NGO Details</h1>

<form action="poorchild1.php" method="post">
<table align="center" class="color">
<tr>
<td>ID</td><td><input type="text" name="t1"></td></tr>
<tr>
<td>Name of NGO</td><td><select name="t2"><option>Uddan</option> </select></td></tr>
<tr>
<td>Location</td><td><input type="text" name="t3"></td></tr>
<tr>
<td>No. of people</td><td><input type="text" name="t4"></td></tr>
<tr>
<td>No. of children</td><td><input type="text" name="t5"></td></tr>
<tr>
<td>Old people</td><td><input type="text" name="t6"></td></tr>
<tr>
<td>Doctors</td><td><input type="text" name="t7"></td></tr>
<tr>
<td>Helpers</td><td><input type="text" name="t8"></td></tr>

<td><input type="submit" value="submit" /></td><td><input type="reset" value="reset" /></td>
</tr></table></form>
</div>
<hr>
<?php
include'footer.php';
?>