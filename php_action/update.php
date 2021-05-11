<?php
//Sessão
session_start();
//conexão
require_once 'db_connect.php';

if (isset($_POST['btn-editar'])) {
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $celular = mysqli_escape_string($connect, $_POST['celular']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "update contatos set nome = '$nome', email = '$email', celular = '$celular' where id = '$id'";

    if (mysqli_query($connect, $sql)){
        $_SESSION['mensagem'] = "Contato atualizado com sucesso!";
        header('location: ../index.php');
    }else{
        $_SESSION['mensagem'] = "Erro! O contato não pode ser editado.";
        header('location: ../index.php');
    }
}
