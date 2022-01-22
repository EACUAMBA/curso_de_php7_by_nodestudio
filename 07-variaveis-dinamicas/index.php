<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variaveis Dinamicas</title>
</head>
<body>
  <?php
  //Variaveis dinamicas, ou vaiaveis de variaveis

  $bebida = "Refrigerante";
  $$bebida = "Fanta";

  echo $$bebida . "<br>";
  echo $Refrigerante;

  print "<hr>";
  $cidade = "Maputo";
  $$cidade = "Zimpeto";
  $$$cidade = "Estadio Nacional";
  echo $cidade . "<br>";
  echo $$cidade . "<br>";
  echo $$$cidade;
  ;

  ?>
</body>
</html>