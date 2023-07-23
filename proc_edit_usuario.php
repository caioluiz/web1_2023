<?php
    session_start();
    include_once('conexao.php');

    if((!isset($_SESSION['cpf']) == true)  and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['cpf']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['cpf'];
    
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM respondente WHERE id LIKE '%$data%' or nome LIKE '%$data%' or cpf LIKE '%$data%' ORDER BY id";
    }
    else
    {
        $sql = "UPDATE respondente SET nome='' WHERE cpf LIKE '$logado' ";
    }     
        
        if(mysqli_query($conn, $sql)){
           echo "Registro atualizado!";
        }else{
            echo "Erro ao tentar atualizar!";
        }
?>
