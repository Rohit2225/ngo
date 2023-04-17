<?php
include"dbconnect.php";
include"header.php";

$qry=mysqli_query($dbc,"select *  from persons");



?>
<table  align=center border=1 class="table table-hover">

<tr class="warning">
<th>Image<th>Name<th>Age<th>Date Of Birth<th>Address</th>

<?php
while($row=mysqli_fetch_row($qry))
{
?>
<tr class="info">
<td><img  src="../admin/images/<?php echo $row[8];?>" width=100 height=100><td><?php echo $row[0];?><td><?php echo $row[1];?><td><?php echo $row[3];?><td><?php echo $row[4];?></td>

<?php
}
?>
</table>