<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validações com VAlidate e Filters</title>
</head>
<body>
<?php
foreach ($_POST as $key => $value) {
    echo "KEY = $key ->" . "Valor = $value <br>";
}
if (isset($_POST['enviar'])) {
    $erros = array();

    if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT))
        $erros[] = "Idade precisa ser um inteiro.";

    if (!isset($_POST['nome']))
        $erros[] = "Insira o seu nome";

    if (!$idade = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL))
        $erros[] = "emial invalido";

    if (!$idade = filter_input(INPUT_POST, 'contacto', FILTER_VALIDATE_INT))
        $erros[] = "contacto invalido";

    if (!$idade = filter_input(INPUT_POST, 'dominio', FILTER_VALIDATE_URL))
        $erros[] = "URL dominio invalido.";


    if (!empty($erros)):
        foreach ($erros as $erro):
            echo "<li>$erro</li>";
        endforeach;
    else:
        echo "O seus valores estao correctos";
    endif;

    $idade = $_POST['idade'];
}

?>
</body>
</html>
