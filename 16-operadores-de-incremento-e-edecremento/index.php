<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operadores de Incremento e de Decremento</title>
</head>
<body>
  <?php
    $valor = 20;

    //Pre incremento
    echo 'Pre incremento: ' . ++$valor;
    echo '<hr>';
    //Pos Incremento - Usa o valor depois incrementa
    echo 'Pos incremento: ' . $valor++;
    echo '<hr>';
    echo 'valor agora: ' . $valor;

    echo '<hr>';

    $valor = 20;

    //Pre decremento
    echo 'Pre decremento: ' . --$valor;
    echo '<hr>';
    //Pos decremento - Usa o valor depois decremento
    echo 'Pos decremento: ' . $valor--;
    echo '<hr>';
    echo 'valor agora: ' . $valor;
  ?>
</body>
</html>