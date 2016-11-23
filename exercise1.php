<?php
$firstName = 'David';
$lastName = 'Powors';
$number = 42.99;
$title = 'the Great Instructor';
$newlines = "<br>";

$herodoc = <<< EOT
 In '$title' is $firstName $lastName. He prefers to be called though.
EOT;
//HERODOS syntax(EOT) is used to printout complex strings. when you dont have to cancel quotations.
//have NO space after or before EOT

 echo $herodoc;

echo $firstName . ' ' . $number;
//you can print multiple variables at 1 line

$fullname = '<br>' . $firstName . ' ' . $lastName;
//you can add strings with "."
echo $fullname;

$titleall = "$fullname $title";
//you can connect strings like this
echo $titleall;

$message = "$newlines I am telling you: He IS $title";
//you can connects strings and variables as well!
echo $message;
 ?>
