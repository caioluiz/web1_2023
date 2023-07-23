<?php
    session_start();
    include_once('conexao.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['cpf']) == true)  and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['cpf']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
// $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM respondente WHERE cpf = '62404730061'";
$resultado_usuario = $mysqli->query($conn, $result_usuario);
$row_usuario = $result_usuario->fetch_assoc($resultado_usuario);
?>

<?php
    session_start();
    include_once('conexao.php');
    // print_r($_SESSION);
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
        $sql = "SELECT * FROM respondente WHERE cpf LIKE '$logado' ";
    }
    $result = $mysqli->query($sql);
    $row = $result->fetch_assoc();
    
        $nome = $row['nome'];
        $cpf = $row['cpf'];
        $email = $row['email'];
        $peso = $row['peso'];
        $altura = $row['altura'];
        $horasdesono = $row['horas_sono_dia'];

?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Pagina Principal - Editar</title>		
	</head>
	<body>
		<h1>Editar Usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_edit_usuario.php">
	        <input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
			
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome completo" value="<?php echo $row_usuario['nome']; ?>"><br><br>
			
			<label>E-mail: </label>
			<input type="email" name="email" placeholder="Digite o seu melhor e-mail" value="<?php echo $row_usuario['email']; ?>"><br><br>
    	
			<input type="submit" value="Editar">
		</form>
	</body>
</html>