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

                if (mysqli_num_rows($resultados) > 0):
                    while ($cliente = mysqli_fetch_array($resultados)):
                        ?>
                        <tr>
                            <td><?php echo $cliente['nome']; ?></td>
                            <td><?php echo $cliente['sobrenome']; ?></td>
                            <td><?php echo $cliente['email']; ?></td>
                            <td><?php echo $cliente['idade']; ?></td>
                            <td><a href="./editar.php?id=<?php echo $cliente['id']; ?>" class="btn-floating orange"><i
                                            class="material-icons">edit</i></a></td>
                            <td><a href="#modal<?php echo $cliente['id']; ?>" class="btn-floating red modal-trigger"><i
                                            class="material-icons">delete</i></a>
                                <div id="modal<?php echo $cliente['id']; ?>" class="modal">
                                    <div class="modal-content">
                                        <h4>Aviso!</h4>
                                        <p>Deseja excluir este cliente?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="./php_action/delete.php" method="post">
                                            <input type="hidden" name="id" value="<?php echo $cliente['id']; ?>">
                                            <button type="submit" class="btn red" name="btn-remover">Remover</button>
                                            <a href="#!"
                                               class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php
                    endwhile;
                else:
                    ?>
                    <tr>
                        <td colspan="4">
                            Não existem registos!
                        </td>
                    </tr>
                <?php
                endif;
                ?>
                </tbody>
            </table>
            <br>
            <a href="registar.php" class="btn">Adicionar cliente</a>
        </div>
    </div>
<?php
include_once './includes/footer.php';