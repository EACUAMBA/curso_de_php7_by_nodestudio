<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funções de Arrays</title>
</head>
<body>
  <?php
    $nomes = ["filho"=>"Edilson", "Avo?"=>"Cuamba", "Pai"=>"Alexandre"];
    $carros = ["pickup"=>"Ford", "Spert"=>"Gallardo", "Tranporte"=>"Hiace"];

    //Verifica se a variavel é do tipo array, retorna um true se for e falso caso não
    echo "É um array: " . is_array($nomes);

    print("<br>");
    //Verifica se um valor existe em alguma posição do array.
    echo "Existe no array: " . in_array("Alexandre", $nomes);

    print("<br>");
    //Retorna um novo array com os indices  do array passado
    echo "Array_keys: ";
    print_r(array_keys($nomes));

    print("<br>");
    //Retorna um novo array com os valores do array passado, um arrau com indice numericos-
    echo "Array_values: ";
    print_r(array_values($nomes));

    print("<br>");
    //Agrega ou mescla dois array e rotorna um novo array.
    echo "array_merge: ";
    print_r(array_merge($nomes, $carros));

    print("<br>");
    //exclui o ultimo registro do array, e retorna ele
    echo "array_pop: ";
    print_r(array_pop($nomes));

    print("<br>");
    //exclui a primeira registro do array, e retorna ele
    echo "array_shift: ";
    print_r(array_shift($nomes));

    print("<br>");
    print("<br>");
    //Adiciona um elemento no iniciao do array
    echo "array_unshift: ";
    print("<br>");
    print_r($nomes);
    print("<br>");
    print_r(array_unshift($nomes, "Luis"));
    print("<br>");
    print_r($nomes);
    print("<br>");

    print("<br>");
    //Adiciona um elemento no final do array
    echo "array_push: ";
    print("<br>");
    print_r($nomes);
    print("<br>");
    print_r(array_push($nomes, "Barlo"));
    print("<br>");
    print_r($nomes);

    print("<br>");
    //Mescla arrays, o primeiro será keys e o outro valores
    echo "array_conbine: ";
    print("<br>");
    print_r(array_combine($nomes, $carros));

    print("<br>");
    //Calcula a soma dos elementos de um array
    echo "array_sum: ";
    print("<br>");
    $precos = [100, 200, 300, 400, 500];
    print_r(array_sum($carros));

    print("<br>");
    //explode() - Tranforma uma string em array
    $data = "27-10-1999";
    $array = explode("-", $data);
    print("Explode de". $data." fica ");
    print_r($array);
    print("<br>");

    print("<br>");
    //implode() - Tranforma um array em uma string separado dos valor que definiste.
    $data = implode("/", $array);
    print("Implode de ");
    print_r($array);
print(" fica " . $data);
    print("<br>");







  ?>
</body>
</html>