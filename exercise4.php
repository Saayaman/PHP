<?php

$name = "Ayako Sayama";
$day = "Wednesday";

//its a little different from JAVA and jquery.

//you can write it without {}in php!
//in this case you use : and you have to end with else and endif.
//elseif and endif MUST be in 1 word in this case
if($name == "Ayako Sayama" && $day == "Wednesday"):
  echo "I am in the present";
elseif($name == "Ayako Sayama" && $day == 'Thursday'):
  echo "I am in the future.";
else:
  echo "Who am I? When is now?";
endif;

echo "<br>";

$myAge = 29;

switch ($myAge) {
  case $myAge > 20:
    echo "Yup I'm older than 20";
    break;
  case $myAge > 25:
    echo "I'm older than 25";
    break;
  case $myAge >= 30:
    echo "yes, Younger than that.";
    break;
  default:
    echo "cant' guess my age?";
    break;
}

 ?>
