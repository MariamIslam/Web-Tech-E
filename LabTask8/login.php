<?php
session_start();

$err = "";
?>

<!DOCTYPE HTML>
<html> 
<head>




 <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <script src="JS/validation.js"></script>
 </head>
<body>

	


       <form action="Controller/LoginControl.php" method="post">
		
		
<div  id ="main"style="position: relative; padding-left: 10%" >




<h1 id="h" >Login</h1>
<form>

 <input type="text" id="username" name="username" placeholder= "Enter your name" ><br><br>

 <input type="text"id="password" name="password" placeholder= "Enter your password"><br>

<br>
  <label class="sml_font text_error"> <?php echo $err; ?></label>
			<input type="checkbox" name="remember" id="remember">
			<label for="remember">Remember Me</label><br><br>
<input type="submit"  id="bt" name="submit" value="Sign in" ">
<p><a href="User_Registration.php">Forget Password?</a></p>
<br>
              

</form>

</div>

<br>
<br>


</body>
</html>