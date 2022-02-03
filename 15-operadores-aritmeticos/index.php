<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operadores Aritmetricos</title>
</head>
<body>
  <?php
  //Adicao
    echo 10 + 10;
    echo '<br>';
    //Subtracao
    echo 5 - 10;
    echo '<br>';
    //Multiplicacao
    echo 5 * 10;
    echo '<br>';
    //Dividao
    echo 23 / 5;
    echo '<br>';
    //Modiulo - Resto da divisao
    echo 23 % 5;
    echo '<br>';
    //Exponenciacao
    echo 2**8;

    $preco = 250;
    $qty = 5;

    echo $preco + $qty;
    echo '<hr>';

    echo $preco - $qty;
    echo '<hr>';

    $precoTotal = $preco * $qty;
    echo $precoTotal . '<hr>';

    echo $preco / $qty;
    echo '<hr>';

    echo $preco % $qty;
    echo '<hr>';

    //Pegar a media
    $media = (10 + 30 + 20 + 50 + 90 + 40 +  20 + 40) / 8;
    echo $media;

  ?>
</body>
</html>