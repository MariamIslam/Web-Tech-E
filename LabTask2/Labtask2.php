<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<fieldset style="width:60%">
    <legend>Task2</legend>
<?php

// define variables and set to empty values
$nameErr=$bgErr = $emailErr = $genderErr = $websiteErr = "";
$name =$bg= $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-'\s]*$/",$name) || str_word_count($name)<2) {
      $nameErr = "Only letters and white space allowed and must contain at least 2 word";
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
    $website = "Date of Birth is required";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }
   if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if (empty($_POST["bg"])) {
    $bgErr = "Blood group is required";
  } else {
    $bg = test_input($_POST["bg"]);
  }
 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<fieldset style="width:50%">
    <legend>Name</legend> 
 <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  <hr>
  <input type="submit" name="submit" value="Submit"> 
</fieldset>

<fieldset style="width:50%">
    <legend>Blood group</legend> 
	<select name="bg" id="cars">
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="o+">O+</option>
    <option value="O-">O-</option>
  </select>
 
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  <hr>
  <input type="submit" name="submit" value="Submit"> 
</fieldset>
<fieldset style="width:50%">
    <legend>Email</legend>   
  <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <hr>
<input type="submit" name="submit" value="Submit"> 
</fieldset>
<fieldset style="width:50%">
    <legend>Date of Birth</legend> 
     <label for="birthdaytime"></label>
    <input type="datetime-local" id="birthdaytime" name="website"value="<?php echo $email;?>">
     
  <br><br>
   <hr>
<input type="submit" name="submit" value="Submit"> 
</fieldset>
<fieldset style="width:50%">
    <legend>Dgree</legend> 
  <input type="Checkbox" name="gende" <?php if (isset($comment) && $comment=="female") echo "checked";?> value="female">SSC
  <input type="Checkbox" name="gend" <?php if (isset($comment) && $comment=="femal") echo "checked";?> value="femal">HSC
  <input type="Checkbox" name="gen" <?php if (isset($comment) && $comment=="fema") echo "checked";?> value="fema">BSC
  <input type="Checkbox" name="ge" <?php if (isset($comment) && $comment=="fem") echo "checked";?> value="fem">MSC
   <hr>
<input type="submit" name="submit" value="Submit"> 
</fieldset>

<fieldset style="width:50%">
    <legend> Gender</legend>
  
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
 <hr>
<input type="submit" name="submit" value="Submit"> 
</fieldset>


</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";
echo $bg;
echo "<br>";
?>
</fieldset>
</body>
</html>