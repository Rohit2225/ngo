<link href="../css/style.css" rel="stylesheet" type="text/css">
<?php
include'../header.php';
?>
<div id="middle_1" style="margin-right:300px">
<br />
<h1 align="center" class="color">Complaints from users</h1>


    
<?php
include'dbconnect.php';
$qry=mysqli_query($dbc,"select * from complain");
?>

<br />
<form name="f">

<table border="1" class="table table-hover" align="center" >
<tr class="warning">
<th>Complaint From</th><th>Complaint To</th><th>Date of complaint</th><th>Complaint Message</th></tr>

<?php
 while($row=mysqli_fetch_row($qry))
 {
?>
<tr class="success">
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

<tr>
<?php
 }
 ?>

</table>
</form></center>
</div>
<hr>
<?php
include'../footer.php';
?>