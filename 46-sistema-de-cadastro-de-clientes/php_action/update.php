<?php
session_start();
require_once 'database_connection.php';

if (isset($_POST['btn-actualizar'])):
    $id = mysqli_escape_string($connection, $_POST['id']);
    $nome = mysqli_escape_string($connection, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connection, $_POST['sobrenome']);
    $email = mysqli_escape_string($connection, $_POST['email']);
    $idade = mysqli_escape_string($connection, $_POST['idade']);
    $sql = "UPDATE cliente SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id = '$id'";

    if (mysqli_query($connection, $sql)):
        $_SESSION['mensagem'] = "Actualizado com sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao actualizar!";
        header('Location: ../index.php');
    endif;
endif;

