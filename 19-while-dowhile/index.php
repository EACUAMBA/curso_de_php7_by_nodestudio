<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>While e Do While</title>
</head>
<body>
  <?php
    //While - ennquanto uma condicao for true ele continua a fazer o job
    
    //Verifica se pode continuar deposi executa
    $i=0;
    while ($i <= 100):
      echo "contador é $i <hr>";
      $i++;  
    endwhile;

    print '<hr>';

    //Executa depois verifica se continua
    $valor = 0;
    do{
      $valor++;
      echo $valor;
    }while($valor < 200);
  ?>
</body>
</html>