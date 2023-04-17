<link href="../css/style.css" rel="stylesheet" type="text/css">
<?php
include'header.php';
?>
<div id="middle_1" style="margin-right:300px">
<br />
<h1 align="center" >Facilities provided to children</h1>


    
<?php
include'dbconnect.php';
$qry=mysqli_query($dbc,"select * from facilitychild");
?>

<br />
<form name="f">

<table border="1" class="table table-hover" align="center" >
<tr class="warning">
<th>Education</th><th>Clothes</th><th>Food</th><th>Games</th><th>Medicines</th></tr>

<?php
 while($row=mysqli_fetch_row($qry))
 {
?>
<tr class="info">
<td>
<?php echo $row[0]; ?>
</td>
<td>
<?php echo $row[1]; ?>
</td>
<td>
<?php echo $row[2]; ?>
</td>
<td>
<?php echo $row[3]; ?>
</td>
<td>
<?php echo $row[4]; ?>
</td>


<?php
 }
 ?>

</table>
</form></center>
</div>
<hr>
<?php
include'footer.php';
?>

