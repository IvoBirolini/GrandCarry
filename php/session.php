<?php

	include("../php/dbconnection.php");

	session_start();
	if((!isset ($_SESSION['loginEmail']) == true) and (!isset ($_SESSION['loginPassword']) == true))
	{
		unset($_SESSION['loginEmail']);
		unset($_SESSION['loginPassword']);
		header('location:../pages/landing.php');
	}

	$logado = $_SESSION['loginEmail'];

	$connect = mysqli_connect('localhost','admin','0513044','grandcarry');
	$name = mysqli_query($connect, "SELECT * FROM usuarios WHERE email = '$logado'");
	$username = mysqli_fetch_array($name);

	if ($username['tipo'] == 'motorista') {
		$nomeMotorista = $username['nome'];
		$veiculo = "SELECT * FROM veiculos WHERE nomeDono = '$nomeMotorista' AND placa IS NOT NULL";
		$verificaVeiculo = mysqli_query($connect,$veiculo);
		$qntVeiculo = mysqli_num_rows($verificaVeiculo)-1;
	}
?>