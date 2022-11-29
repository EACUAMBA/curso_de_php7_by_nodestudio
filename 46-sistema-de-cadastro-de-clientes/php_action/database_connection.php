<?php
//Conexão com a base de dados
$serverName = "127.0.0.1";
$port = "3306";
$username = "root";
$password = "root";
$databaseName = "curso_php7_by_nodestudio";

$connection = mysqli_connect($serverName, $username, $password, $databaseName);
mysqli_set_charset($connection, 'UTF8');

if (mysqli_connect_error()):
    echo 'Erro na conexão: ' . mysqli_connect_error();
endif;

function filtrar($value)
{
    global $connection;
    $value = mysqli_escape_string($connection, $value);
    $value = htmlspecialchars($value);
    return $value;
}

?>

