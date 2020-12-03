

<!DOCTYPE HTML>
<html>  
<body>
<?php
	include 'Top.php';
	?>
	
<form action="Controller/LoginControl.php" method="post">

       
		
		
<div style="position: relative; padding-left: 30%">
<fieldset style="width:50%" align="center">
<legend>Login</legend>
<form>



Name: <input type="text" name="name"  ><br>
Password: <input type="text" name="password"><br>
<hr>
<div style="width: 250px; border-top: 2px solid gray;"></div><br>
			<input type="checkbox" name="remember" id="remember">
			<label for="remember">Remember Me</label><br><br>
<input type="submit" name="submit">
<p><a href="User_Registration.php">Forget Password?</a></p>

			
</form>
</fieldset>
</div>
</form>
<br>
<br>
<?php
	include 'bottom.php';
	?>

</body>
</html>