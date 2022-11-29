<?php
require_once 'database_connection.php';

if (isset($_POST['btn-registar'])):

    $nome = mysqli_escape_string($connection, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connection, $_POST['sobrenome']);
    $email = mysqli_escape_string($connection, $_POST['email']);
    $idade = mysqli_escape_string($connection, $_POST['idade']);
    $sql = "INSERT INTO cliente (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";

    if (mysqli_query($connection, $sql)):
        header('Location: ../index.php?sucesso');
    else:
        header('Location: ../index.php?error');
    endif;
endif;

