<?php
//Sessão
session_start();
//conexão
require_once 'db_connect.php';

if (isset($_POST['btn-deletar'])) {
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "delete from contatos where id = '$id'";

    if (mysqli_query($connect, $sql)){
        $_SESSION['mensagem'] = "Contato apagado com sucesso!";
        header('location: ../index.php');
    }else{
        $_SESSION['mensagem'] = "Erro! O contato não pode ser apagado.";
        header('location: ../index.php');
    }
}

