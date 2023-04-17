<?php
include"dbconnect.php";
include"header.php";

$qry=mysqli_query($dbc,"select *  from donator");



?>
<table  align=center border=1 >

<tr>
<th>Donator Name<th>Email Id<th>Contact No <th> Amount Donated<th>Date</th>
<tr>
<?php
while($row=mysqli_fetch_row($qry))
{
?>
<td><?php echo $row[6];?><td><?php echo $row[7];?><td><?php echo $row[5];?></td>
<td><?php echo $row[2];?></td><td><?php echo $row[4];?></td>

<tr>
<?php
}
?>
</table>