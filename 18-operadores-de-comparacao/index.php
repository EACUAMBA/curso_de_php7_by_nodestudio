<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operadores de comparacao</title>
</head>
<body>
  <?php
  //== - compara se sao inguais
  echo 10 == '10' ? '10 == 10 - true' : '10 == 10 - false';
  echo '<hr>';

  //compara se sao diferentes
  echo 10 != 10 ? '10 != 10 - true' : '10 != 10 - false';
  echo '<hr>';

  //opera. de identidade - verifica se um valor é identico, ser do mesmo tipo, e estar na mesma memoria 
  echo 10 === 10 ? '10 === 10 - true' : '10 === 10 - false';
  echo '<hr>';

  //opera. de identidade - verifica se um valor é identico, ser do mesmo tipo, e estar na mesma memoria 
  echo 10 !== 10 ? '10 !== 10 - true' : '10 !== 10 - false';
  echo '<hr>';

  //diferente
  echo 10 <> 10 ? '10 <> 10 - true' : '10 <> 10 - false';
  echo '<hr>';


  //Maior que
  echo 10 > 10 ? '10 > 10 - true' : '10 > 10 - false';
  echo '<hr>';

  //Menor que
  echo 10 < 10 ? '10 < 10 - true' : '10 < 10 - false';
  echo '<hr>';

  //Maior que e igual
  echo 10 >= 10 ? '10 >= 10 - true' : '10 >= 10 - false';
  echo '<hr>';

  //Menor que e iagual
  echo 10 <= 10 ? '10 <= 10 - true' : '10 <= 10 - false';
  echo '<hr>';

  //spaceship - 
  echo 10 <=> 10 ? '10 <=> 10 - true' : '10 <=> 10 - false';
  echo '<hr>';

  var_dump(20 <=> 3)


  


  ?>
</body>
</html>