<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>For e Foreach</title>
</head>
<body>
  <?php 
    //for - para -use quando voce ja sabe o numero de ireacaos

    for($contador = 12; $contador > 0; $contador --):
      echo "5 x $contador = " . ($contador*5) . '<hr>';
    endfor;

    print '<hr>';
    //foreach para cada use quando voce nao sabe o numero de itracoes que voce quer 

    $nomes = array('Edilson', 'Luis', 'Anibal', 'Carmen', 'Loiuty');
    foreach ($nomes as $indice => $nome):
      echo "$indice Nome $nome <hr>";

    endforeach;

  ?>
</body>
</html>