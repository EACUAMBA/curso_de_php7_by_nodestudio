<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operadores de atribuicao</title>
</head>
<body>
  <?php
    //Estamos dizendo que o valor vai ser definido por o que esta depois do operador =
    $valor = 10;
    $valor2 = 5;
    $valor = $valor +$valor2;
    echo $valor;

    echo '<hr>';
    //Podemos conbinar operador aritmetrico mais de atribuicao
    echo '<hr>';
    $valor += $valor2;
    echo $valor;

    echo '<hr>';
    $valor -= $valor2;
    echo $valor;

    echo '<hr>';
    $valor *= $valor2;
    echo $valor;

    echo '<hr>';
    $valor /= $valor2;
    echo $valor;

    echo '<hr>';
    $valor %= $valor2;
    echo $valor;

    echo '<hr>';
    $valor **= $valor2;
    echo $valor;

  ?>
</body>
</html>