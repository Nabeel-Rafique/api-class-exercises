<?php
#Making a choice randomly

$options = ["Tailwind","Bulma","uikit","foundation","MaterialDesign"];

#More Randomness.....Who will win the Premier league?
$name = "Liverpool";
$name_lenght = strlen($name);

#array_rand() n times is the number of letters in that name

$final_int_pos = 0;
while ($name_lenght <= 0) {
  $final_int_pos = array_rand($options,1);
  $name_lenght = $same_lenght - 1;
  // code...
}
echo $options[$final_int_pos];
 ?>
