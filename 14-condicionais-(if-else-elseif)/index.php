<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>if else else if</title>
</head>
<body>
  <?php
    $numero = 10;
    if($numero == 10):
      echo "É igual a 10";
    endif;

    print("<br>");

    $numero = 10;
    if($numero == 15):
      echo "É igual a 15";
    else:
      echo "É diferente de 15";
    endif;

    print("<br>");

    $numero = 30;
    if($numero == 10){
      echo "É igual a 10";
    }else if($numero <= 9):
      echo "É menor do que 10";
    else:
      echo "Numero desconhecido";
    endif;

    print("<br>");

    //Operador Ternario
    $media = 7;
    echo $media >= 7 ? "Passaste":"Que pena"

  ?>
</body>
</html>