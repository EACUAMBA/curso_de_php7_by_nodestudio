<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formularios ($_POST)</title>
</head>
<body>
<?php
$nome = $_GET['nome'];
$contacto = $_GET['contacto'];

echo "Seu nome é $nome e seu contacto é $contacto";
echo "<hr>";

var_dump($_GET);

?>
</body>
</html>
