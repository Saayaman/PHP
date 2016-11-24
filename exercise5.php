
<?php

//this is an example of a ternary operator
$answer = 48;
$result = ($answer == 40) ? 'It is true!':'Keep calculating';
//after the ? THIS part will be printed out if true: false;
echo $result;


echo "<br>";
$unit_cost = 0;
$wholesale_price = $unit_cost ?:25;
//if wholesale is not unit_cost=0, it is 25/
echo $wholesale_price;
echo "<br>";

$wholesale_price2 = $unit_cost ?? 25;
//?? is null
echo $wholesale_price2;

if(isset($unit_cost)){
  //isset means "if it exists"
  $wholesale_price = $unit_cost;
} else {
  $wholesale_price = 25;
}
echo $wholesale_price;

 ?>
