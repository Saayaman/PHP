<?php

//calculations in PHP!

$a = 5;
$b = 2;
$c = 10;
$d = 11.8;//this is converted to 11
$e = 6.4; //this is converted to 6

echo - $a. '<br>';
echo $a / $b .'<br>';
echo $a % $b .'<br>'; //modular devision = calculates remainder
echo $c % $b .'<br>';

echo $d + $e.'<br>';
echo $d % $e .'<br>';//gives remainder of 11/6

echo $a ** $b; //5 squares = 25; expedition calculation
echo pow($a, $b); //pow does the same thing (square root)
//pow works both on older and newer php

$a += $b;
echo '<br>'. $a;

$c++;
echo '<br>'. $c;
++$c; //
echo '<br>'. $c;

 ?>
