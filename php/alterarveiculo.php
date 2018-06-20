<?php 

include("../php/dbconnection.php");

$nomeDono = $_POST['nomeDono'];
$motorista = $_POST['motorista'];
$telefone = $_POST['telMotorista'];
$email = $_POST['email'];
$placa = $_POST['placa'];
$partida = $_POST['partida'];
$destino = $_POST['destino'];

if($motorista == "" || $telefone == "" || $email == "" || $partida == "" || $destino == ""){
	echo"<script language='javascript' type='text/javascript'>alert('Nenhum campo deve ficar em branco!');window.location.href='../pages/gestaoveiculos.php';</script>";

}else{
	
	$query = "UPDATE veiculos SET motorista = '$motorista', telefone = '$telefone', email = '$email', partida = '$partida', destino = '$destino' WHERE placa = '$placa'";
	$insert = mysqli_query($connect, $query);

	if($insert){
		echo"<script language='javascript' type='text/javascript'>alert('Veículo cadastrado com sucesso!');window.location.href='../pages/gestaoveiculos.php';</script>";
	}else{
		echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse veículo');window.location.href='../pages/gestaoveiculos.php';</script>";
		}
	}
mysqli_close($connect);
?>