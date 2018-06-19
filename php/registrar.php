<?php 

$login = $_POST['registerEmail'];
$senha = MD5($_POST['registerPassword']);
$nome = $_POST['registerName'];
$telefone = $_POST['registerPhone'];
$tipo = $_POST['registerProfile'];
$connect = mysqli_connect('localhost','admin','0513044','grandcarry');
$query_select = "SELECT email FROM usuarios WHERE email = '$login'";
$select = mysqli_query($connect, $query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['email'];

if($login == "" || $login == null){
  echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');</script>";
  
}else{
  if($logarray == $login){
   
    echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');</script>";
    die();
    
  }else{
    $query = "INSERT INTO usuarios (nome,senha,email,telefone,tipo) VALUES ('$nome','$senha','$login','$telefone','$tipo')";
    $insert = mysqli_query($connect, $query);
    
    if($insert){
      echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='../pages/landing.html';</script>";
    }else{
      echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');</script>";
    }
  }
}
mysqli_close($connect);
?>