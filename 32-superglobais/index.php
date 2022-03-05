<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Superglobais</title>
</head>
<body>
<?php
//Variaveis predefinidas do PHP
$x = 10;
$y = 15;

function soma (){
    //Variaveis indisponiveis neste escopo. pois sao globais
    echo $GLOBALS['y'] + $GLOBALS['x'];
}
soma();

echo "<hr>";

//SERVER

foreach($_SERVER as $key => $value){
    echo "KEY = $key  ----"."Valor = $value <br>";
}

?>
</body>
</html>
