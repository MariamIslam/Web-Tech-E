

<!DOCTYPE HTML>
<html> 
<head>
 <link rel="stylesheet" type="text/css" href="CSS/style.css">

 </head>
<body>

	


       
		
		
<div  id ="main"style="position: relative; padding-left: 10%" >




<h1 id="h">Login</h1>
<form>

 <input type="text" id="textbox" name="name" placeholder= "Enter your name" ><br><br>

 <input type="text"id="textbox" name="password" placeholder= "Enter your password"><br>

<br>
			<input type="checkbox" name="remember" id="remember">
			<label for="remember">Remember Me</label><br><br>
<input type="button"  id="bt" name="submit" value="Sign in">
<p><a href="User_Registration.php">Forget Password?</a></p>

</form>

</div>

<br>
<br>
<?php
	include 'bottom.php';
	?>

</body>
</html>