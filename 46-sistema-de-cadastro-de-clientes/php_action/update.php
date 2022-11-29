<?php
session_start();
require_once 'database_connection.php';


if (isset($_POST['btn-actualizar'])):
    $id = filtrar($_POST['id']);
    $nome = filtrar($_POST['nome']);
    $sobrenome = filtrar($_POST['sobrenome']);
    $email = filtrar($_POST['email']);
    $idade = filtrar($_POST['idade']);
    $sql = "UPDATE cliente SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id = '$id'";

    if (mysqli_query($connection, $sql)):
        $_SESSION['mensagem'] = "Actualizado com sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao actualizar!";
        header('Location: ../index.php');
    endif;
endif;

