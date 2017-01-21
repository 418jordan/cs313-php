<?php
session_start();
?>

<!DOCTYPE HTML>  
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="surveyStyle.css"/>

</head>
<body> 
    <h1>Hello the current results are:</h1>
    
    <?php echo $_SESSION['icecream'];?>
    <?php echo $_SESSION['sweetsalty'];?>
    <?php echo $_SESSION['morningnight'];?>
    <?php echo $_SESSION['sodawater'];?>
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
    
</body>
</html>