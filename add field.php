<!DOCTYPE html>
<html>
<head>
	<title>Add Football Field Information</title>
</head>
<body background=images.jpg>
<div id="content">
<center>

 	<p style="font-family:impact; font-size:30pt; color:lightgreen">ADD FIELD</p>

	<form method="post" action="done page add field.php" enctype="multipart/form-data">
		<input type="hidden" name="size" value="1000000">
<table>		
		
		<div>
			<tr><td><font color=lightgreen>Field Name</td><td><input type="text" name="Fieldname"></td></tr>
		</div>
		<div>
			<tr><td><font color=lightgreen>Field Address</td><td> <input type="text" name="Fieldaddress"></td></tr>
		</div>
		<div>
			<tr><td><font color=lightgreen>Field Size </td><td><input type="text" name="Fieldsize"></td></tr>
		</div>
		<div>
			<tr><td><font color=lightgreen>Field price per hour</td><td> <input type="text" name="Fieldprice"></td></tr>
		</div>
		<div>
			<tr><td><font color=lightgreen>Field Telephone no.</td><td> <input type="text" name="FieldTel"></td></tr>
		</div>
		<div>
		<tr><td> <input type="file" name="image"></td></tr>
		</div>
<br>
		<div>
			<tr><td></td><td align=right><input type="submit" name="upload" value="Add Info"></td></tr>
		</div>
</table>
<br><a href=admin_page.php><font color=white>Back to Admin page</a>
	</form>
</div>
</body>
</html>
		