<?php 

include("../php/dbconnection.php");

$nomeDono = $_POST['nomeDono'];
$motorista = $_POST['nomeMotorista'];
$telefone = $_POST['telMotorista'];
$email = $_POST['emailMotorista'];
$placa = $_POST['placaVeiculo'];
$partida = $_POST['bairroPartida'];
$destino = $_POST['bairroDestino'];
$query_select = "SELECT placa FROM veiculos WHERE placa = '$placa'";
$select = mysqli_query($connect, $query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['placa'];

if($placa == "" || $placa == null){
  echo"<script language='javascript' type='text/javascript'>alert('O campo placa deve ser preenchido');</script>";
  
}else{
  if($logarray == $placa){
   
    echo"<script language='javascript' type='text/javascript'>alert('Esse veículo já foi cadastrado.');window.location.href='../pages/cadastrovans.php';</script>";
    die();
    
  }else{
    $query = "INSERT INTO veiculos (nomeDono,motorista,telefone,email,placa,partida,destino) VALUES ('$nomeDono','$motorista','$telefone','$email','$placa','$partida','$destino')";
    $insert = mysqli_query($connect, $query);
    
    if($insert){
      echo"<script language='javascript' type='text/javascript'>alert('Veículo cadastrado com sucesso!');window.location.href='../pages/cadastrovans.php';</script>";
    }else{
      echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse veículo');window.location.href='../pages/cadastrovans.php';</script>";
    }
  }
}
mysqli_close($connect);
?>