
<link href="../css/style.css" rel="stylesheet" type="text/css">
<?php
include'header.php';
?>
<div id="middle_1" style="margin-right:300px">
<br />
<h1 align="center" class="color">View Detail</h1>


<script>
	function show(a)
	{
		location.href="viewdetail.php?t="+a;
	
	
	}
	
	</script>
    
<?php
include'dbconnect.php';
$qry=mysqli_query($dbc,"select * from poorchild");
?>

<br />
<form name="f">

<table border="1" class="table table-hover" align="center" >
<tr class="warning">
<th>NGO</th><th>No. of People</th><th>No. of Child</th><th>No. of Doctors</th><th>More Detail</th></tr>

<?php
 while($row=mysqli_fetch_row($qry))
 {
?>
<tr class="info">
<td>
<?php echo $row[1]; ?>
</td>
<td>
<?php echo $row[3]; ?>
</td>
<td>
<?php echo $row[4]; ?>
</td>
<td>
<?php echo $row[6]; ?>
</td>
<td><input type="button" class="btn btn-success" value="Detail"   onclick="show('<?php echo $row[0];?>') "/></td><tr>
<?php
 }
 ?>

</table>
</form></center>




<?php
if(isset($_GET["t"]))
{
$a=$_GET["t"];
$q=mysqli_query($dbc,"select * from poorchild where id='$a'");

$row=mysqli_fetch_row($q);


print"<table border='2'style='margin-top:30px;' align='center' >";
print"<tr>
<th>ID</th><th>NGO</th><th>Location</th><th>No. of people</th><th>No. of Child</th><th>No. of Old people</th><th>Doctors</th><th>Helpers</th>
</tr>
<tr>";


print"<td> $row[0] </td>

<td> $row[1] </td>
<td> $row[2] </td>
<td> $row[3] </td>
<td> $row[4] </td>
<td> $row[5] </td>
<td> $row[6] </td>
<td> $row[7] </td>

</table> ";


}

?>

</div></div>

</div>
<hr>

