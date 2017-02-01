<?php
if(isset($_POST['submit'])){
// Fetching variables of the form which travels in URL
$icecream = $_POST['icecream'];
$sweetsalt = $_POST['sweetsalty'];
$morningnight = $_POST['morningnight'];
$sodawater = $_POST['sodawater'];
if($icecream !=''&& $sweetsalty !=''&& $morningnight !=''&& $sodawater !='')
{
//  To redirect form on a particular page
header("Location:./results.php");
}
else{
?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
}
}
?>