
<link href="../css/style.css" rel="stylesheet" type="text/css">
<?php
include'../header.php';
?>
<div id="middle_1" style="margin-left:-50px">
<br />
<h1 align="center" class="color">Modify</h1>
<script>

function show1(b)
{
	c=confirm("do you want to edit");
	if(c)
	{
		location.href="modify.php?user="+b;
	}
	else
	{
	location.href="modi.php";	
	}
}

</script>
<center>


<?php
include 'dbconnect.php';

$qry=mysqli_query($dbc,"select * from login");?>
<center>
<table  border=2 width="600" height="200" class="table table-hover">
<tr class="warning">
<th>Username</th><th>Password</th><th>Type</th><th>Fullname</th><th>DOB</th><th>Email</th><th>Question</th><th>Answer</th><th>Address</th><th>Country</th><th>City</th><th>State</th><th>Modify</th>
<?php
while($row=mysqli_fetch_row($qry))
{
?>
<tr class="info">
<td >
<?php echo $row[0]; ?></td>
<td>
<?php echo $row[1]; ?></td>

<td>
<?php echo $row[3]; ?></td>
<td>

<?php echo $row[4]; ?></td>
<td>
<?php echo $row[5]; ?></td>
<td>
<?php echo $row[6]; ?></td>
<td>
<?php echo $row[7]; ?></td>

<td>
<?php echo $row[8]; ?></td>
<td>
<?php echo $row[9]; ?></td>
<td>
<?php echo $row[10]; ?></td>
<td>
<?php echo $row[11]; ?></td>
<td>
<?php echo $row[12]; ?></td>
 

<td><input type="button" class="btn btn-success" value="Modify" onClick="show1('<?php echo $row[0];?>')"></td>


<?php
}
?></tr></table></center></div></center>
</div>
<hr>
<?php
include'../footer.php';
?>
