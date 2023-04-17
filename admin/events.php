<link href="../css/style.css" rel="stylesheet" type="text/css">
<?php
include'../header.php';
?>
<div id="middle_1" style="margin-right:300px">
<br />
<h1 align="center" class="color">Add Educational Event</h1>
<table align=center >
<tr class="info">
<td>
			<form action="insert_event.php" method="post" enctype="multipart/form-data" class="user">
			<table style="color:#000;">
<tr>
<td>
			<label>Educational Event Name</label><td>
			<input type="text" name="event_name">
		<tr>
<td>	<label>Description</label><td>
			<textarea name="event_description" rows="5"></textarea>
<tr>
<td>
			<label>date</label><td>
			<input type="date" name="event_date">
<tr>
<td>			<label>time</label><td>
			<input type="time" name="event_time">
<tr>
<td>			<label>address</label><td>
			<textarea name="event_address" rows="3"></textarea>
<tr>
<td>			<label>Poster</label><td>
			<input type="file" name="mm">
<tr>
<td>			<label>state</label><td>
			<input type="text" name="event_state">
			
<tr>
<td>			<label>city</label><td>
			<input type="text" name="event_city">
<tr>
<td>			<label>duration</label><td>
			<input type="text" name="event_duration">
<tr>
<td>			<input type="submit" value="Add Event">
</table>
			</form>
</div>
<hr>
<?php
include'../footer.php';
?>