<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funcoes para String</title>
</head>
<body>
  <?php
  //strtoupper
  $nome = 'Edilson Cuamba';
  $nomeNovo= strtoupper($nome);
  echo $nomeNovo . '<hr>';

  //strtolower
  $nomeNovo= strtolower($nomeNovo);
  echo $nomeNovo . '<hr>';

  //substr(string, start index, length(optional))
  $msg = "ola mundo";
  echo substr($msg, 4);
  echo '<hr>';
  echo substr($msg, 4, 5);
  echo '<hr>';

  $object = "10.00";
  $novoObj = str_pad($object, 10, "-", STR_PAD_LEFT);
  print '<p>'.$novoObj.'</p>';
  echo '<hr>';

  //Vai repetir 10 vezes essa string
  print str_repeat($nome, 10);
  echo '<hr>';
//Retorna o numero de caracteres que tema string
  print strlen($msg);
  echo '<hr>';
  //Rescreve um avalor especifico
  print str_replace('Cuamba', 'Alexandre Cuamba', $nome);
  echo '<hr>';
  print strpos($nome, "Cuamba");
  echo substr($nome, strpos($nome, "C"), strlen('Cuamba'));
  echo '<hr>';
  ?>
</body>
</html>