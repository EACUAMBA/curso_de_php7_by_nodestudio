<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays</title>
</head>
<body>
  <?php
  //Arrays
  $carros = array(
    1 => "BMW", 
    2 => "Toyota",
    3 => "Mazda");

    //Inser no fim do array. 4 neste caso
    $carros[]= "VW"; 
    $carros[200]= "Chaverlote"; 

    //Função para imprimir array
  print_r($carros);
  print("<br>");
  print $carros[4];
  print $carros[200];

  print("<hr>");
  //Outra forma de criar array
  $nomes = array();
  $nomes[] = "Edilson";
  $nomes[] = "Luis";
  $nomes[] = "Carlos";
  $nomes[] = "Alfredo";
  print_r($nomes);

  print("<hr>");

  $estados_agua = ["Liquido", "Gasozo", "Solido"];
  print_r($estados_agua);

  print("<hr>");
  //Conta os elementos do array.
  echo count($nomes);

  print("<hr>");
  //Foreach - iterar sobre os elementos de um array
  foreach($nomes as $nome){
    print($nome . "<br>");
  }
  print("<hr>");
  //Arrays numericos - São aqueles que o indice é um valor númerico.
  
  //Arrays associativos são aqueles que os indices são valores diferentes de números
  $pessoa = array(
    "nome" => "Edilson",
    "nome-do-meio" => "Alexandre",
    "apelido"=>"Cuamba"
  );

  print($pessoa["nome-do-meio"]);
  print_r($pessoa);
  $pessoa["provincia"] = "Maputo";
  print_r($pessoa);
  print("<br>");
  print("<br>");

  //Foreach
  foreach($pessoa as $campo => $valor){
    print($campo . " : " . $valor);
    print("<br>");
  }

  print("<br>");print("<br>");

  //Arrays multidimensionais
  $familia = array(
    "Alexandre"=>array( "esposa"=>"Leia","primogenito"=>"Alcidio", "filho"=>"Edilson"),
    "Jose"=>array("esposa"=>"Melita", "primogenito"=>"Esqueci","filha"=>"Marta", "filha2"=>"Cleo", "enteada"=>"Nome onde foi"),
    "Nelson"=>array("esposa"=>"Eugenia", "Vir", "Lizete", "Zeka", "Pai"),
  );
  print($familia["Alexandre"][1]);
  print("<br>");
  print_r($familia);
  print("<br>");
  print("<br>");

  foreach($familia["Jose"] as $indice => $valor){
    print($indice . " : " . $valor);
    print("<br>");
  }

  



  ?>
</body>
</html>