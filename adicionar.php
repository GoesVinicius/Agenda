<?php
include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo Contato</h3>

            <form action="php_action/create.php" method="POST">
                <div class="input-field col s12">
                    <input type="text" name="nome" id="nome">
                    <label for="nome">Nome</label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="email" id="email">
                    <label for="email">E-mail</label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="celular" id="celular">
                    <label for="celular">Celular</label>
                </div>

                <button type="submit" name="btn-salvar" class="btn">Salvar</button>
                <a href="index.php" type="submit" class="btn green">Contatos</a>
            </form>

    </div>
</div>

<?php
include_once 'includes/footer.php';
?>

