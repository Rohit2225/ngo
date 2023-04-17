<link href="../css/style.css" rel="stylesheet" type="text/css">
<?php
include'../header.php';
?>
<div id="middle_1" style="margin-left:-50px">
<br />
<h1 align="center" class="color">Modify</h1>

<?php
include 'dbconnect.php';
$user=$_GET['user'];

$qry=mysqli_query($dbc,"select * from login where username='$user'");

$row=mysqli_fetch_row($qry);

?>
<form action="modify1.php" method="get">
<pre></pre>
<table border=1 align="center">
<tr>
<th style="color:#000">Username<th><input type="text" name="t1" value=<?php echo $row[0];?>></th></tr>

<tr>
<th style="color:#000">Password<th><input type="text" name="t2" value=<?php echo $row[1];?>></th></tr>

<tr>
<th style="color:#000">Confirm Password<th><input type="text" name="t3" value=<?php echo $row[2];?>></th></tr>


<tr>
<th style="color:#000">Type<th><input type="text" name="t4" value=<?php echo $row[3];?>></th></tr>

<tr>
<th style="color:#000">Fullname<th><input type="text" name="t5" value=<?php echo $row[4];?>></th></tr>

<tr>
<th style="color:#000">DOB<th><input type="text" name="t6" value=<?php echo $row[5];?>></th></tr>

<tr>
<th style="color:#000">email<th><input type="text" name="t7" value=<?php echo $row[6];?>></th></tr>

<tr>
<th style="color:#000">question<th><input type="text" name="t8" value=<?php echo $row[7];?>></th></tr>

<tr>
<th style="color:#000">Answer<th><input type="text" name="t9" value=<?php echo $row[8];?>></th></tr>

<tr>
<th style="color:#000">Address<th><input type="text" name="t10" value=<?php echo $row[9];?>></th></tr>

<tr>
<th style="color:#000">Country<th><input type="text" name="t11" value=<?php echo $row[10];?>></th></tr>

<tr>
<th style="color:#000">City<th><input type="text" name="t12" value=<?php echo $row[11];?>></th></tr>

<tr>
<th style="color:#000">State<th><input type="text" name="t13" value=<?php echo $row[12];?>></th></tr>



<tr>
<th><input type="submit" value="submit"><th>
<input type="reset"></th></tr>
</table></form>
</div>
<hr>
<?php
include'../footer.php';
?>
