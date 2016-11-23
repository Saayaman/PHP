<?php
$book = [
  'title' => "The hitchhiker's guide to the galaxy",
  'author' => "Douglas Adams",
  'description' => "a comedy sci-fi adventure originally based on a BBC radio series"
];

$characters = [
'Arthur Dent',
'Ford Perfect',
'Zaphod Beeblebrox',
'Slartibartfast'
];

  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>This is a practice PHP page!</title>
  </head>
  <body>
    <p>PHP can be embedded inside HTML.</p>
    <!-- echo  means the same as ?=  -->

    <h1><?= "{$book['title']} by {$book['author']}" ?></h1>
    <p><?= '"' . $book['title'].'" is' . $book['description'];  ?></p>
    <h2>Main Characterss</h2>
    <ul>
      <li><?= $characters[0];  ?></li>
      <li><?= $characters[1];  ?></li>
      <li><?= $characters[2];  ?></li>
      <li><?= $characters[3];  ?></li>
    </ul>
  </body>
</html>
