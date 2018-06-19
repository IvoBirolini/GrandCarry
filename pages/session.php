<?php
	session_start();
	if((!isset ($_SESSION['loginEmail']) == true) and (!isset ($_SESSION['loginPassword']) == true))
	{
		unset($_SESSION['loginEmail']);
		unset($_SESSION['loginPassword']);
		header('location:index.php');
	}

	$logado = $_SESSION['loginEmail'];
?>