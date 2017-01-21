<?php
session_start();


 if (isset($_POST['Submit'])) { 
 $_SESSION['icecream'] = $_POST['icecream'];
 $_SESSION['sweetsalty'] = $_POST['sweetsalty'];
 $_SESSION['morningnight'] = $_POST['morningnight'];
 $_SESSION['sodawater'] = $_POST['sodawater'];
 } 
?>

<!DOCTYPE HTML>  
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="surveyStyle.css"/>

</head>
<body>  

<?php
// define variables and set to empty values
$sodawaterErr = $sweetsaltyErr = $icecreamErr = $morningnightErr = "";
$sodawater = $sweetsalty = $icecream = $morningnight = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
<form method="post" name="#form" action = ''./results.php'>  

   Chocolate or Vanilla?
  <input type="radio" name="icecream" <?php if (isset($icecream) && $icecream=="chocolate") echo "checked";?> value="chocolate">Chocolate
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



echo "<br>";
echo $icecream;
echo "<br>";
echo $sweetsalty;
echo "<br>";
echo $morningnight;
echo "<br>";
echo $sodawater;

?>
<?php include 'redirect2.php';?>

</body>
</html>