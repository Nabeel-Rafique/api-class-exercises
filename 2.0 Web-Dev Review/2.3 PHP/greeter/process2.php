<?php
//var_dump($_GET);



$all_name = $_GET['full-name'];
$age = $_GET['age'];
$gender = $_GET['gender'];

//Getting the first name
$space_position = strpos($all_name.' ');

if(strpos($all_name,' ') == false){
$first_name = $all_name;
}else{
  $first_name = substr($all_name,$space_position);
}

$greeting = $first_name;
if ($age <=12) {
  header("Location:bonus.php?msg=Child, ${greeting}&greet=yes");
} else if ($age >=13 and $age <= 19){
header("Location:bonus.php?msg=Teenie, ${greetin}&greet=yes");
}else if ($age >= 20 and $age <= 30){
  header("Location:bonus.php?msg=Yout, ${greeting}&greet=yes");
}else {
header("Location:bonus.php?msg=Mzito, ${greeting}&greet=yes");
}
?>
