<?php
include_once './php_action/database_connection.php';
include_once './includes/header.php';

if (isset($_GET['id'])):
    $id = mysqli_escape_string($connection, $_GET['id']);

    $sql = "SELECT * FROM cliente WHERE id = '$id'";
    $resultado = mysqli_query($connection, $sql);
    $cliente = mysqli_fetch_array($resultado);
endif;
?>
    <div class="row">
        <div class="col s12 m6 push-m3">
            <h3 class="light">Editar Cliente</h3>
            <form action="./php_action/update.php" method="post">
                <input type="hidden" name="id" value="<?php echo $cliente['id']; ?>">
                <div class="input-field col s12">
                    <input type="text" value="<?php echo $cliente['nome']; ?>" name="nome" id="nome">
                    <label for="nome">Nome</label>
                </div>

                <div class="input-field col s12">
                    <input type="text" value="<?php echo $cliente['sobrenome']; ?>" name="sobrenome" id="sobrenome">
                    <label for="sobrenome">Sobrenome</label>
                </div>

                <div class="input-field col s12">
                    <input type="text" value="<?php echo $cliente['email']; ?> " name="email" id="email">
                    <label for="email">Email</label>
                </div>

                <div class="input-field col s12">
                    <input type="text" value="<?php echo $cliente['idade']; ?>" name="idade" id="idade">
                    <label for="idade">idade</label>
                </div>

                <button type="submit" name="btn-actualizar" class="btn">Actualizar</button>
                <a href="index.php" class="btn green">Lista de Clientes</a>
            </form>
        </div>
    </div>
<?php
include_once './includes/footer.php';