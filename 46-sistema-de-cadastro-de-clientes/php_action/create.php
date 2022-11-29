<?php
session_start();
require_once 'database_connection.php';


if (isset($_POST['btn-registar'])):
    $nome = filtrar($_POST['nome']);
    $sobrenome = filtrar($_POST['sobrenome']);
    $email = filtrar($_POST['email']);
    $idade = filtrar($_POST['idade']);
    $sql = "INSERT INTO cliente (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";

    if (mysqli_query($connection, $sql)):
        $_SESSION['mensagem'] = "Registado com sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao registar!";
        header('Location: ../index.php');
    endif;
endif;

