<?php

//practicing arrays!
$characters = array('Ayako Sayama', 'James Johnson', 'Hilary Clinton');
print_r($characters); //prints all array

echo '<br>';
//shorterway of writing arrays!
$characters2 = ['Hiroki Honda', 'Masa Tsuneyoshi'];
$characters2[] = "Marvin";
$characters2[] = 'Jason';
//you can add by just making new lines

print_r($characters2); //prints all array
echo $characters2[3]; //prints an array


echo '<br>';

$descriptions = [
  'Earth' => 'Mostly harmless',
  'Mars' => 'Very hot'
];
$descriptions['Saturn'] = 'You will totally die';

echo $descriptions['Mars'];
echo $descriptions['Saturn'] = 'busted';
//you can add an array when you echo!
// and overwrite the value of the variable
echo '<br>';

echo "Earh is descrived as {$descriptions['Earth']}";
//associative arrays

 ?>
