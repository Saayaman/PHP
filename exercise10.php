<?php
$characters = ['Archer Dent', 'Ford Prefect', 'Zaphod Beeblebrox', 'Marvin', 'SlartivartFast'];
$descriptions = [
  'Earth' => 'mostly harmless',
  'Marvin' => 'the paranoid android',
  'Zaphod Beeblebrox' => 'President of the Imperial Galactic Government'
];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Practice of Arrays</title>
  </head>
  <body>
    <h1>Using each loop to print array: <br>
    <h3>this is better to use when you don't want to access all arrays.</h3>
    <ul>
      <?php
        $num_items = count($characters);
        for($i = $num_items -1; $i >= 0; $i--){
          //if you set first number to biggest,
          //and decrement it, it counts backwards
          echo "<li>$characters[$i]</li>";
        }
       ?>
    </ul>
    <h1>Using foreach loop to print array</h1>
    <ul>
      <?php foreach ($characters as $name){
        echo "<li>$name</li>";
        }
   ?>
    </ul>
    <h1>using foreach => to display array</h1>
    <ul>
      <?php foreach ($descriptions as $key => $value) {
        echo "<p>$key is $value.</p>";
      }
       ?>

      <!--
        you can replace curly braces with colon:
        and put a end??? statement at the end
its exactly the same as the top!
      -->
        <?php foreach ($descriptions as $key => $value) :
          echo "<p>$key is $value.</p>";
        endforeach;
         ?>

    </ul>

  </body>
</html>
