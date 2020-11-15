<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="controller/saveproduct.php" method="post">
		<fieldset style="width: 30%">
		<legend>ADD PRODUCT</legend>
		<label>Name</label><br>
		<input type="text" name="name"><br>
		<label>Buying Price</label><br>
		<input type="text" name="bprice"><br>
		<label>Selling Price</label><br>
		<input type="text" name="sprice"><br><br>
		<div style="width: 200px; border-top: 2px solid gray;"></div><br>
		<input type="checkbox" name="display" id="display" value="Yes">
		<label for="display">Display</label><br><br>
		<div style="width: 200px; border-top: 2px solid gray;"></div><br>
		<input type="submit" name="saveProduct" value="Save">
	</fieldset>
	</form>
</body>
</html>