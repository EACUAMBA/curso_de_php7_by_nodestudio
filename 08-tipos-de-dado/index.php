<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos de Dados</title>
</head>
<body>
  <?php
  //Tipos Escalares
  //String
  $nome = "Edilson Alexandre Camba";
  var_dump($nome);
  echo "</br>";

  if(is_string($nome)):
    echo "É uma string.";
  else:
    echo "nâo é uma string.";
  endif;

  echo "<hr>";
  //int
  $idade= 22;
  var_dump($idade);
  echo "</br>";
  if(is_int($idade)):
    echo "É um inteiro.";
  else:
    echo "nâo é um inteiro.";
  endif;

  echo "<hr>";
   //float
   $altura= 1.68;
   var_dump($altura);
   echo "</br>";
   if(is_float($altura)):
     echo "É um decimal.";
   else:
     echo "nâo é um decimal.";
   endif;

   echo "<hr>";
   //boolean
   $admin= false;
   var_dump($admin);
   echo "</br>";
   if(is_bool($admin)):
     echo "É um boolean.";
   else:
     echo "nâo é um boolean.";
   endif;

   echo "<hr>";
   //Tipos Compostos
   //array
   $carros = array("Nissan", "BMW", "Audi", 12, 20.4, true);
   var_dump($carros);
   echo "</br>";
   if(is_array($carros)):
     echo "É um array.";
   else:
     echo "nâo é um array.";
   endif;

   echo "<hr>";
    //object
    class Cliente{
      public $nome;
      public function atribuirNome($nome){
        $this->$nome = $nome;
      }
    }
    $cliente = new Cliente();
    $cliente->atribuirNome("Carlos novo nome");
    var_dump($cliente);
    echo "</br>";
    if(is_object($cliente)):
      echo "É um object.";
    else:
      echo "nâo é um object.";
    endif;

    echo "<hr>";
    //null
    $variavelNull = null;
    var_dump($variavelNull);
    echo "</br>";
    if(is_null($variavelNull)):
      echo "É um null.";
    else:
      echo "nâo é um null.";
    endif;
  ?>
</body>
</html>