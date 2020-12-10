<!DOCTYPE HTML>  
<html>
<head>


<link rel="stylesheet" type="text/css" href="CSS/Regstyle.css">

</head>
<body>  


	<div style="position: relative; padding-left: 60%">

<h1>Registration</h1> 
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr =$commentErr = $conpassErr= $websiteErr = "";
$name = $email = $gender = $comment =$conpass= $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/^[a-zA-Z-' ]*$/",$website)) {
      $websiteErr = "Invalid username";
    }
  }
  ///^[a-z0-9A-Z-.{8,}' ]*$/

  if (empty($_POST["comment"])) {
    $commentErr = "Name is required";
  } else {
	   $comment = test_input($_POST["comment"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-z0-9A-Z-']*$/",$comment)|| strlen($comment)<=8) {
     $commentErr = "Only letters and number allowed and minimum 8 character";
    }
	  
    
  }
  if (empty($_POST["comment"]) || $_POST["comment"] != $_POST["conpass"]) {
    $conpassErr = " Password doesn't match.";
  } else {
    $comment = test_input($_POST["conpass"]);
  }
  

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



<form method="post" action="controller/AddUser.php" method="post">  
  Name: <input type="text"id="Regtextbox" name="name" value="<?php echo $name;?>">
  <span class="error"> <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text"id="Regtextbox" name="email" value="<?php echo $email;?>">
  <span class="error"> <?php echo $emailErr;?></span>
  <br><br>
  User Name: <input type="text"id="Regtextbox" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Password:  <input type="text" id="Regtextbox"name="comment" value="<?php echo $comment;?>">
  <span class="error"><?php echo $commentErr;?></span>
  <br>
  Confirm Password:  <input type="text" id="Regtextbox"name="conpass" value="<?php echo $conpass;?>">
  <span class="error"><?php echo $conpassErr;?></span>
  <br><br>
  
  
<fieldset style="width:50%">
<legend>Gender:</legend> 
  
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error"><?php echo $genderErr;?></span>
  <br><br>
 </fieldset>
 <br>
 
  <input type="button"  id="btn" name="submit" value="Submit">
</form>


 
 </div>
 <br>

</body>
</html>