<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Challenging using loops</title>
  </head>
  <body>
    <h1></h1>
<table>
  <?php
  echo '<tr>';
  echo '<th> </th>';
for ($col= 1; $col <= 12 ; $col++) {
  echo "<th>$col</th>";
}
echo '</tr>';
for ($row= 1, $col = 1; $row <= 12; $row++) {
  echo '<tr>';
  if ($col == 1) {
    echo "<th>$row</th>";
  }
  while ($col <= 12) {
    echo '<td>' . $row * $col++ . '</td>';
  }
  echo '</tr>';
  $col =1;
}

  ?>
</table>
  </body>
</html>
