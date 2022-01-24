<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>switch case</title>
</head>
<body>
  <?php
    $cor = "Gray";

    switch($cor){
      case "Amarelo":
        echo "Voce gosta amarelo";
        break;
      case "Azul":
        echo "Voce gosta azul";
        break;
      case "Verde":
        echo "Voce gosta verde";
        break;
      default:
        echo "Sua cor predileta é ". $cor;
        break;
    }
  ?>
</body>
</html>