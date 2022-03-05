<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funções para Números</title>
</head>
<body>
<?php
//NumberFormat
$db = 12345.67;
$preco = number_format($db, 2, ",", ".");
echo "O valor do produto é $preco";

echo "<hr>";
//Rounding Number
echo "Rounding 3.45 - " . round(3.45);
echo "Rounding 3.5 - " . round(3.5);
echo "Rounding 3.75 - " . round(3.74);
echo "<hr>";

//Arredondadndo para cima
echo "Ceiling 3.45 - " . ceil(3.45);
echo "Ceiling 3.5 - " . ceil(3.5);
echo "Ceiling 3.75 - " . ceil(3.74);
echo "<hr>";

//Arredondadndo para baixo
echo "Floor 3.45 - " . floor(3.45);
echo "Floor 3.5 - " . floor(3.5);
echo "Floor 3.75 - " . floor(3.74);
echo "<hr>";

//Escolhendo valores aleiatorios
echo rand(1, 10);

?>
</body>
</html>
