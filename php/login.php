<?php

session_start();
$login = $_POST['loginEmail'];
$entrar = $_POST['entrar'];
$senha = md5($_POST['loginPassword']);
$connect = mysqli_connect('localhost','admin','0513044','grandcarry');
$list = "SELECT * FROM usuarios WHERE email = '$login' AND senha = '$senha'";

if (isset($entrar)) {

  $verifica = mysqli_query($connect, $list);
  if (mysqli_num_rows($verifica) == 0){
    echo ("<script LANGUAGE='JavaScript'>
            window.alert('Login e/ou senha incorretos!');
            window.location.href='../pages/landing.php';
        </script>");
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    die();
  }else{
    setcookie("login",$login);

    $_SESSION['loginEmail'] = $login;
    $_SESSION['loginPassword'] = $senha;

    $tipo = mysqli_query($connect, "SELECT * FROM usuarios WHERE email = '$login'");
    $getTipo = mysqli_fetch_array($tipo);

    if ($getTipo[tipo] == motorista) {
      header("Location:../pages/perfilmotorista.php");
    } else {
      header("Location:../pages/perfilcliente.php");
    }
  }
}

?>