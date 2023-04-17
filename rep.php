<?php
include"header.php";
include("dbconnect.php");

$result = mysqli_query($dbc,"select * from blog");

?>
<style>
td{width:180px;height:150px;}</style>
<div  style="">
<table  align=center      border=1>
<td>Image</td><td> id</td><td>username</td> <td>title</td><td>comment
<tr>
<?php
while($row=mysqli_fetch_row($result))
{
?>
<tr>
 <td><img src="bimage/<?php echo $row[4];?>" width=100 height=100>
<td> <?php echo $row[0]?>
<td> <?php echo $row[1]?>
<td> <?php echo $row[2]?>
<td> <?php echo $row[3]?>



<?php
}
?>
</table></div>