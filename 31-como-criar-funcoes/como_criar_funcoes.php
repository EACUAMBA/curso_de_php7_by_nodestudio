<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Como criar funções</title>
</head>
<body>
<?php
//Criando função
//Função sem parametros e retorno
function exibirNome($nome){
    echo "Meu nome é $nome.";
}

//Executando a função
exibirNome("Edilson");

echo "<hr>";

//Funcao com parametros
function calcularMedia($nome, $n1, $n2, $n3, $n4){
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    if($media >= 9.5){
        echo "$nome foi aprovado com " . number_format($media, 2, ",", ".") . " valores.<hr>";
    }else{
        echo "$nome foi reprovado com " . number_format($media, 2, ",", ".") . " valores.<hr>";
    }
}

calcularMedia("Edilson", 18, 5, 6, 7);

echo "<hr>";



?>
</body>
</html>
