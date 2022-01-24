<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Constntes</title>
</head>
<body>
  <?php
  //Identificador para um valor unico; Valor que não altera durante a execução do programa.

  define("NOME", "Edilson Alexandre Cuamba");
  define("IDADE", 24);
  define("ALTURA", 1.68);
  define("ESTADO_CIVIL", "CASADO");


  //para chamar uma constante não usamos mais o sifrão.
  echo "Meu nome é " . NOME . " tenho " . IDADE . " anos de idade, minha altura é " . ALTURA . "m e sou " . ESTADO_CIVIL . "<br>";
  
  //Constantes de Arrays
  define("CARROS", ["GMC", "BMW", "AUDI", "JAC"]);
  var_dump(CARROS);
 


  ?>
</body>
</html>