<?php

//Conexão
include_once 'php_action/db_connect.php';
include_once 'includes/header.php';
include_once 'includes/mensagem.php';
?>

    <div class="row">

        <div class="col s12 m6 push-m3">
            <h3 class="light">Contatos</h3>
            <table class="striped">

                <thead>
                    <tr>
                        <th>Nome:</th>
                        <th>E-mail:</th>
                        <th>Celular:</th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                        $sql = "select * from contatos order by nome";
                        $resultado = mysqli_query($connect, $sql);

                        if (mysqli_num_rows($resultado) > 0):

                        while ($dados = mysqli_fetch_array($resultado)):
                    ?>
                        <tr>
                            <td><?php echo $dados ['nome'];?></td>
                            <td><?php echo $dados ['email'];?></td>
                            <td><?php echo $dados ['celular'];?></td>
                            <td><a href="editar.php?id=<?php echo $dados['id']?>" class="btn-floating"><i class="material-icons">edit</i></a></td>

                            <td><a href="#modal <?php echo $dados ['id'];?>" class="btn-floating modal-trigger"><i class="material-icons red">delete</i></a></td>

                            <!-- Estrutura Modal -->
                            <div id="modal <?php echo $dados ['id'];?>" class="modal">
                                <div class="modal-content">
                                    <h4>Atenção</h4>
                                    <p>Tem certeza que deseja apagar este contato?</p>
                                </div>
                                <div class="modal-footer">


                                    <form action="php_action/delete.php" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $dados ['id'];?>">
                                        <button type="submit" name="btn-deletar" class="btn red">Sim, quero apagar</button>
                                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                                    </form>

                                </div>
                            </div>
                        </tr>

                    <?php endwhile;
                        else: ?>

                            <tr>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>

                    <?php
                        endif;
                    ?>

                </tbody>

            </table> </br>

            <a href="adicionar.php" class="btn">Adicionar Contato</a>
            <a href="pesquisar.php" class="btn">Pesquisar Contato</a>

        </div>
    </div>

<?php
include_once 'includes/footer.php';
?>
