<link href="css/style.css" rel="stylesheet" type="text/css">
<?php
include'../header.php';
?>

<script src="jquery-1.6.2.min.js"></script>
<script src="jquery-ui-1.8.15.custom.min.js"></script>
<link rel="stylesheet" href="jqueryCalendar.css">
<script>
                jQuery(function() {
                                jQuery( "#a" ).datepicker();
                });
                </script>



<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="mystyle.css" type="text/css" />

<body>
<div >
<br>
<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New Registration</h2>
<table style="margin:0 0 0 200px;" width="600" >
<tr>
    <td  >
<form action="addpeople1.php"     method=post  enctype=multipart/form-data >
<table ">
<tr>
<td>
  Name <td><input type=text name="username"  size="15" cssClass="fieldtext"/>
<tr>
<td>
  Age <td><input type="text" name="age"  size="15" cssClass="fieldtext"/>
<tr>
<td>
  Gender <td>Male<input type=radio name="s1"  value=male  cssClass="fieldtext"/>Femaile<input  type=radio  name=s1 value=female>
 <tr>
<td>Type<td><select  name=k11>
							<option>oldperson</option>
                            <option>child</option>
                            </select>
                            </td>
 <tr>

<td>
 Dob  <td><input type=text name="dob"  id=a   />
<tr>

<tr>

<td>
    Address       <td>     <textarea name="address" rows="4" cols="20" cssClass="fieldtext" >
	                        </textarea>
<tr>
<td>	
  Country <td><input type="text" name="country" />
 <tr>
<td>
  State<td> <input type="text" name="state" />
<tr>
<td>
  City <td><input type="text" name="city" />
<tr>
<td>Image<td><input  type=file  name=mm>
<tr>
<td>
   <input type="submit" value="Submit"  align="center" cssClass="btn btn-success"/>

</form>
            
    
</tr>
</table>

</div >
<div >

</div>


</body>