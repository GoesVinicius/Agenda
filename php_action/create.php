<?php
//Sessão
session_start();
//conexão
require_once 'db_connect.php';

if (isset($_POST['btn-salvar'])) {
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $celular = mysqli_escape_string($connect, $_POST['celular']);

    $sql = "insert into  contatos (nome, email, celular) values ('$nome', '$email', '$celular')";

    if (mysqli_query($connect, $sql)){
        $_SESSION['mensagem'] = "Contato salvo com sucesso!";
        header('location: ../index.php');
    }else{
        $_SESSION['mensagem'] = "Erro! O contato não pode ser salvo.";
        header('location: ../index.php');
    }
}
