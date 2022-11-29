<?php
include_once './includes/mensagem.php';
require_once './php_action/database_connection.php';
include_once './includes/header.php';
?>

    <div class="row">
        <div class="col s12 m6 push-m3">
            <h3 class="light">Clientes</h3>
            <table class="striped">
                <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>Email:</th>
                    <th>Idade:</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                <?php
                $sql = "SELECT * FROM cliente;";
                $resultados = mysqli_query($connection, $sql);

                while ($cliente = mysqli_fetch_array($resultados)):
                    ?>
                    <tr>
                        <td><?php echo $cliente['nome']; ?></td>
                        <td><?php echo $cliente['sobrenome']; ?></td>
                        <td><?php echo $cliente['email']; ?></td>
                        <td><?php echo $cliente['idade']; ?></td>
                        <td><a href="./editar.php?id=<?php echo $cliente['id']; ?>" class="btn-floating orange"><i
                                        class="material-icons">edit</i></a></td>
                        <td><a href="./remover.php?id=<?php echo $cliente['id']; ?>" class="btn-floating red"><i
                                        class="material-icons">delete</i></a></td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
            <br>
            <a href="registar.php" class="btn">Adicionar cliente</a>
        </div>
    </div>
<?php
include_once './includes/footer.php';