<?php
    session_start();
    include_once('conexao.php');
    
    if((!isset($_SESSION['cpf']) == true)  and (!isset($_SESSION['senha']) == true)) {
        unset($_SESSION['cpf']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }

    $logado = $_SESSION['cpf'];
    
    
    $sql = "UPDATE respondente SET removido='sim' WHERE cpf LIKE '$logado' ";
    

    if ($mysqli->query($sql) !== TRUE) {
        echo "<p style='color: red; font-size: 20px;'>Erro ao desativar o acesso: {$mysqli->error}</p>";
      } else {
        // Logout do usuário e redirecionamento para a página de login

        $sqlSenhaAdm = "UPDATE respondente SET senha=1234 WHERE cpf LIKE '$logado'";
        if($mysqli->query($sqlSenhaAdm) === TRUE){
            header("Location: login.php");
        }
        session_unset();
        session_destroy();
        exit;
      }
?>