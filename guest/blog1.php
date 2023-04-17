
<?php  include"header.php";
include"dbconnect.php";
$un=$_REQUEST['username'];

?>


<script src="jquery-1.6.2.min.js"></script>
<script src="jquery-ui-1.8.15.custom.min.js"></script>
<link rel="stylesheet" href="jqueryCalendar.css">
<script>
                jQuery(function() {
                                jQuery( "#a" ).datepicker();
                });
                </script>


<div  style="">

<form action="blog2.php" method="post"  enctype=multipart/form-data   >
<table style="width:500px;height:350px;margin-left:350px">
<tr>
<td>
username<td><input type=text name="b1"   value=<?php echo $un;?>></td></tr>
<tr>
<td>title<td><input type=text name="t2"></td></tr>
<tr>
<td>Comment<td><textarea name="t3" rows=10 cols=20></textarea></td></tr>
<tr>
<td>Date<td><input  type=text  name=t4  id=a></td></tr>
<tr>
<td>Image<td><input  type=file  name="mm"></td></tr>
<tr>
<td><input type=submit value="submit"></td></tr>

</table>
</form></div>

