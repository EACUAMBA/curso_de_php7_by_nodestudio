<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aspas Simples, Aspas Duplas e Concatenação</title>
</head>
<body>
  <?php
    $nome = "Edilson Cuamba";
    echo 'Meu nome é \'$nome\' ' . $nome . "<br>"; //Aspas simples são literais, tudo é considerado texto.
  echo "Meu nome é \"$nome\"";//é capaz de processar as variaveis.
    

  ?>
</body>
</html>