<link href="../css/style.css" rel="stylesheet" type="text/css">
<?php
include'header.php';
?>

<script>

function  show1(f)
{


var t = document.getElementById("s2").value;
alert(t);
f.t3.value=t;
}

function  show(f)
{var t = document.getElementById("s1").value;
alert(t);
f.t3.value=t;
 

}</script>
<body>
<div id="middle_1" style="margin-left:-50px">
<br />
<h1 align="center" class="color">Donator</h1>
<style>
th{width:250px;}</style>
<form action="donator1.php" method="post" name="f" id="f" >
<table   align=center>
<tr>
 <th><input  type=radio  name=s1 id=s1  value="20000" onclick="show(this.form)">Rs. 20,000 can provide Library Kits and reading material to create a reading habit and improve learning levels.</th><th><input type=radio  name=s1 value="50000"  id=s2 onclick="show1(this.form)">Rs 5,000 can provide Sports Kit for children in school wherein children will have access to playing material for their overall development.</th></tr>
</table>






<table align="center" class="color">
<tr>
<td>Support to NGO</td><td><select name="t1"><option>Uddan</option> </select></td></tr>
<tr>
<td>Donation</td><td><input type="radio" name="t2">Credit card<input type="radio" name="t2">Debit Card</td></tr>
<tr>
<td>Amount</td><td><input type="text" name="t3"></td></tr>
<tr>
<td>Card no.</td><td><input type="text" name="t4"></td></tr>
<tr>
<td>Date</td><td><input type="date" name="t5"></td></tr>
<tr>
<td>Contact</td><td><input type="text" name="t6"></td></tr>
<tr>
<td>Name</td><td><input type="text" name="t7"></td></tr>
<tr>
<td>Email</td><td><input type="text" name="t8"></td></tr>
<tr>
<td><input type="submit" value="submit" /></td><td><input type="reset" value="reset" /></td>
</tr>
</table>
</form>
</div>
<hr>
<?php
include'footer.php';
?>