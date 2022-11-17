<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gaspard Van Asbrouck</title>
  <meta name="description" content="A simple HTML5 Template for new projects.">
</head>
<body>
    <p>Hello World</p>
    <?php for ($i=1; $i <= 10 ; $i++) : ?>
            <p>le nombre vaut <?= $i ?> </p>
    <?php endfor ?>
    
    <?php for ($i=1; $i <= 10 ; $i++) : ?>
        <?php if ($i != 3) : ?>
            <p>le nombre vaut <?= $i ?></p>
        <?php endif ?>
    <?php endfor ?>
    <?php for ($i=1; $i <= 10 ; $i++) : ?>
        <?php if ( $i != 4 and $i != 5 and $i != 6 and $i != 7 ) : ?>
           <p>le nombre vaut <?= $i ?></p>
        <?php endif ?>
    <?php endfor ?>
    <?php $a = -5;
    $b = 10; ?>
    <p>La valeur absolue de <?= $a ?> vaut <?=  abs($a) ?></p>
    <p>La valeur absolue de <?= $b ?> vaut <?=  abs($b) ?></p>



</body>
</html>