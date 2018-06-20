<?php 

	include("../php/dbconnection.php");	

	$placa = $_POST['placa'];
	$query = "UPDATE veiculos SET placa = NULL WHERE placa = '$placa'";
	$remove = mysqli_query($connect, $query);
	
	if ($remove) {
		echo"<script language='javascript' type='text/javascript'>alert('Veículo removido com sucesso!');window.location.href='../pages/gestaoveiculos.php';</script>";
	}else{
		echo"<script language='javascript' type='text/javascript'>alert('Não foi possível remover este veículo.');window.location.href='../pages/gestaoveiculos.php';</script>";
	}
	
	mysqli_close($connect);
?>