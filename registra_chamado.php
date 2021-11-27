<?php
	require_once "validador_acesso.php";
	
	//session_start();
	$nome = str_replace('#', '-', $_POST['nome']);
	$categoria = $_POST['categoria'];
	$email = $_POST['email'];
	$descricao = str_replace('#', '-', $_POST['descricao']);
	$registro = $_POST['registro'];
	$id_usuario = $_SESSION['id'];

	$texto = $id_usuario.'#'.$nome.'#'.$categoria.'#'.$email.'#'.$descricao.'#'.$registro.PHP_EOL;

	//echo $texto;

	$arquivo = fopen('chamados.uni', 'a');

	fwrite($arquivo, $texto);

	fclose($arquivo);

	header('Location: home.php?abertura=true');
?>