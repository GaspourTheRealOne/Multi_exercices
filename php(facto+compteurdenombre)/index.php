<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
        $num = 7;  
        $factorielle = 1;  
        for ($x=$num; $x>=1; $x--)   
        {  
            $factorielle = $factorielle * $x;  
        }
    ?>
    <p>La factorielle de <?= $num ?> est <?= $factorielle?> 

    <?php $data = "dans cette phrase il y a :";?>

    <?php foreach (count_chars($data, 1) as $i => $val): ?>
        <p>il y a <?= $val ?> de fois la lettre <?= chr($i) ?> dans le mot</p>
    <?php endforeach ?>
</body>
</html>