<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variaveis</title>
</head>

<body>
  <?php
    $nome = "Edilson Alexandre Cuamba";
    $idade = 23;
    $altura = 1.68;
    echo "Eu chamo-me $nome e tenho $idade, minha altura  é $altura.</br>";

    //Alterando dados
    $nome = "Edilson Alexandre Cuamba";
    $idade = 24;
    $altura = 1.70;
    echo "Eu chamo-me $nome e tenho $idade, minha altura  é $altura.";

    //Regra de nomeiação de variaveis
    $nome;
    $_meunome;
    $carro10;
    $meu_nome;
    $meuNome;

    //Nomes inválidos
    //$1234nome;
    //$carro*+--;
    //meu nome

    echo "<hr>";
    //As varia veis são case sensitive
    $carro = "BMW";
    $Carro = "AUDI";
    
    echo $carro . "</br>"; 
    echo $Carro . "</br>"; 
    
  ?>
</body>

</html>

</html>