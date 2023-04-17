<link href="../css/style.css" rel="stylesheet" type="text/css">
<?php
include'header.php';
?>
<center>
<div id="middle_1" style="margin-right:300px">
<br />
<h1 align="center" class="color">Suggestions/Complaints</h1>


<form action="complain1.php" method="post">
<table border="1" class="color">
<tr>
<td>From</td><td><input type="text" name="t1" /></td></tr>
<tr>
<td>To</td><td><input type="text" name="t2" /</td></tr>
<tr>
<td>Date</td><td><input type="date" name="t3" /</td></tr>
<tr>
<td>Suggestion/complaints</td><td><textarea name="t4" cols="17" rows="5"></textarea></td></tr>
<tr>
<td><input type="submit"  /></td><td><input type="reset"  /></td></tr>
</table></form>
</center>
</div>
<hr>
<?php
include'footer.php';
?>