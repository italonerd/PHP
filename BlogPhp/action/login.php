<?php 
// Bibliotecas
	require_once('../config.php');

// Sess�o Login
	session_start();

// Parametros
	$email = $_POST['email'];
	$senha = $_POST['senha'];

// Usuario

	// Login
	$usuario = DAOFactory::getUsuarioDAO()->login($email, $senha);

	// Eco
	if($usuario)
		$_SESSION['email'] = $email;
	else
		echo "<script>alert('Usu�rio ou senha inv�lidos!');</script>";
	
echo '<script>window.location = "' . $_SERVER['HTTP_REFERER'] .'"</script>';

?>