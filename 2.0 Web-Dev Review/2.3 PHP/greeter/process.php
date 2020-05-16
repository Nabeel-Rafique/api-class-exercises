<?php
//var_dump($_GET);

$age = $_GET['age'];

if ($age <=12) {
  header("Location:index.php?msg=Child&greet=yes");
} else if ($age >=13 and $age <= 19){
header("Location:index.php?msg=Teenie&greet=yes");
}else if ($age >= 20 and $age <= 30){
  header("Location:index.php?msg=Yout&greet=yes");
}else {
header("Location:index.php?msg=Mzito&greet=yes");
}
?>
