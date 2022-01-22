<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Escopo de Variaveis</title>
</head>
<body>
  <?php
  //Escopo Global
  $nome = "Edilson Cuamba";
  $a = 1;
  $b = 3;
  $c = 7;

  //Escopo Local
  function exibeNome(){
    //Definindo a variavel global.
    global $nome;
    echo $nome . "<br>";
  }

  exibeNome();
  
  print "<hr>";
  function exibeCidade(){
    //Escopo local
    global $cidade;
    $cidade = "Maputo";
  }
  exibeCidade();
  echo $cidade;
  
  print "<hr>";
  function soma(){
echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
  }
  soma();

  //Para acessar uma varia que esta fora do escopo de uma funcao devemos dizer que a variavel x que queremos 'e a global, fazendo assim global $var ou $GLOBALS['var'], assim estamos definindo.
  ?>
</body>
</html>