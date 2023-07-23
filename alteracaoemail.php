<?php
    session_start();
    include_once('conexao.php');

    if((!isset($_SESSION['cpf']) == true)  and (!isset($_SESSION['senha']) == true)) {
        unset($_SESSION['cpf']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }

    $logado = $_SESSION['cpf'];
   

    // Recupera os dados que foram digitados no formulario
    $newEmail = $_POST['novos_emails'];

    // Replace 'current_username' with the existing username that you want to update
    $sql = "UPDATE respondente SET novos_emails='$newEmail' WHERE cpf='$logado'";

    if ($mysqli->query($sql) === TRUE) {
        header('Location: paginaprincipal.php');
    } else {
        header('Location: paginaprincipal.php');
    }

    $mysqli->close();

?>