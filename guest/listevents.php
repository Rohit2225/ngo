<?php
include"dbconnect.php";
include"header.php";

$qry=mysqli_query($dbc,"select *  from event");



?>
<table  align=center border=1 class="table table-hover">

<tr class="warning">
<th>Image<th>Event Name<th>Description<th>Date <th> Time <th>Address<th>City<th>Duration</th>

<?php
while($row=mysqli_fetch_row($qry))
{
?>
<tr class="info">
<td><img  src="../admin/images/<?php echo $row[8];?>" width=100 height=100><td><?php echo $row[1];?><td><?php echo $row[2];?><td><?php echo $row[3];?></td>
<td><?php echo $row[4];?></td><td><?php echo $row[5];?></td><td><?php echo $row[6];?></td>
<td><?php echo $row[7];?></td>
<?php
}
?>
</table>