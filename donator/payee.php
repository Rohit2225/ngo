<link href="../css/style.css" rel="stylesheet" type="text/css">
<?php
include'dheader.php';
//session_start();
$user=$_SESSION['uname'];
?>
<div id="middle_1" style="margin-right:300px">
<br />
<center><h1 class="color" > Welcome Mr.<?php echo"<h1>",$user;?> Donator</h1></center>

</div>
<hr />


<?php
include'footer.php';
?>