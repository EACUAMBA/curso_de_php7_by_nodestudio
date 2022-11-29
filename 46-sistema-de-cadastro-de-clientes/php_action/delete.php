<?php
session_start();
require_once 'database_connection.php';

if (isset($_POST['btn-remover'])):
    $id = mysqli_escape_string($connection, $_POST['id']);
    $sql = "DELETE FROM cliente WHERE id = '$id'";

    if (mysqli_query($connection, $sql)):
        $_SESSION['mensagem'] = "Removido com sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao remover!";
        header('Location: ../index.php');
    endif;
endif;

