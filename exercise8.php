<?php

//how to calclulate mintues to hours+minutes

$total_minutes = 318;
$minutes = $total_minutes % 60;
$hours = ($total_minutes - $minutes)/60;

//alternative answer
//$hours = intdiv($total_minutes, 60);
//intdiv gives ?? many times it wants to divide by

echo "Time taken was $hours hours $minutes minutes";

 ?>
