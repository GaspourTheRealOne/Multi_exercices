<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gaspard Van Asbrouck</title>
  <meta name="description" content="A simple HTML5 Template for new projects.">
</head>
<body>
    <?php
    echo '<p>Hello World</p>';
    for ($i=1; $i <= 10 ; $i++) { 
        echo "<p>le nombre vaut $i </p>";
    }
    for ($i=1; $i <= 10 ; $i++) { 
        if ($i != 3){
            echo "<p>le nombre vaut $i </p>";
        }
    }
    for ($i=1; $i <= 10 ; $i++) {
        if ( $i != 4 and $i != 5 and $i != 6 and $i != 7 ){
            echo "<p>le nombre vaut $i </p>";
        }
    }
    $a = -5;
    $b = 10;
    echo "<p>La valeur absolue de $a vaut " . abs($a) ."</p>";
    echo "<p>La valeur absolue de $b vaut " . abs($b) ."</p>";


    ?>



</body>
</html>