<!DOCTYPE HTML>  
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="surveyStyle.css"/>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $websiteErr = $sodawaterErr = $sweetsaltyErr = $icecreamErr = $morningnightErr = "";
$name = $email = $comment = $website = $sodawater = $sweetsalty = $icecream = $morningnight = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
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
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["icecream"])) {
    $icecreamErr = "Ice Cream flavor is required";
  } else {
    $icecream = test_input($_POST["icecream"]);
  }
  if (empty($_POST["sweetsalty"])) {
    $sweetsaltyErr = "Sweet or Salty is required";
  } else {
    $sweetsalty = test_input($_POST["sweetsalty"]);
  }
  if (empty($_POST["morningnight"])) {
    $morningnightErr = "Morning or Night person is required";
  } else {
    $morningnight = test_input($_POST["morningnight"]);
  }
  if (empty($_POST["sodawater"])) {
    $sodawaterErr = "Soda or Water is required";
  } else {
    $sodawater = test_input($_POST["sodawater"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>

  Chocolate or Vanilla?
  <input type="radio" name="icecream" <?php if (isset($icecream) && $icecream=="chocolate") echo "checked";?> value="icecream">Chocolate
  <input type="radio" name="icecream" <?php if (isset($icecream) && $icecream=="vanilla") echo "checked";?> value="vanilla">Vanilla
  <span class="error">* <?php echo $icecreamErr;?></span>
  <br><br>

 Sweet or Salty?
  <input type="radio" name="sweetsalty" <?php if (isset($sweetsalty) && $sweetsalty=="sweet") echo "checked";?> value="sweet">Sweet
  <input type="radio" name="sweetsalty" <?php if (isset($sweetsalty) && $sweetsalty=="salty") echo "checked";?> value="salty">Salty
  <span class="error">* <?php echo $sweetsaltyErr;?></span>
  <br><br>

  Morning person and night person?
  <input type="radio" name="morningnight" <?php if (isset($morningnight) && $morningnight=="morning") echo "checked";?> value="morning">Morning
  <input type="radio" name="morningnight" <?php if (isset($morningnight) && $morningnight=="night") echo "checked";?> value="night">Night
  <span class="error">* <?php echo $morningnightErr;?></span>
  <br><br>

  Soda or water?
  <input type="radio" name="sodawater" <?php if (isset($sodawater) && $sodawater=="soda") echo "checked";?> value="soda">Soda
  <input type="radio" name="sodawater" <?php if (isset($sodawater) && $sodawater=="water") echo "checked";?> value="water">water
  <span class="error">* <?php echo $sodawaterErr;?></span>
  <br><br>

  <input type="submit" name="submit" value="Submit">  
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
echo $icecream;
echo "<br>";
echo $sweetsalty;
echo "<br>";
echo $morningnight;
echo "<br>";
echo $sodawater;
?>

</body>
</html>