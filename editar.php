<?php
//conexão
include_once 'php_action/db_connect.php';
include_once 'includes/header.php';
//Pegando o ID
if (isset($_GET['id'])) {
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "select * from contatos where id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
}
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Editar Contato</h3>

        <form action="php_action/update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>">
                <label for="nome">Nome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="email" id="email" value="<?php echo $dados['email'];?>">
                <label for="email">E-mail</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="celular" id="celular" value="<?php echo $dados['celular'];?>">
                <label for="celular">Celular</label>
            </div>

            <button type="submit" name="btn-editar" class="btn">Editar</button>
            <a href="index.php" type="submit" class="btn green">Contatos</a>
        </form>

    </div>
</div>

<?php
include_once 'includes/footer.php';
?>

