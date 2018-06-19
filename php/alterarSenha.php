<?php

include("../php/session.php");

$list = "SELECT * FROM usuarios WHERE email = '$logado'";
$atual = mysqli_query($connect,"SELECT * FROM usuarios WHERE email = '$logado'");
$senhaAtual = mysqli_fetch_array($atual);

if ($_POST['senhaNova'] == $_POST['senhaNovaConf']) {
	if (md5($_POST['senhaAtual']) == $senhaAtual['senha']) {
		$senhaNova = md5($_POST['senhaNova']);
		$alter = mysqli_query($connect, "UPDATE usuarios SET senha = '$senhaNova' WHERE email = '$logado'");
			echo ("<script LANGUAGE='JavaScript'>
            window.alert('Senha alterada com sucesso.');
            window.location.href='../pages/perfilcliente.php';
        </script>");
	} else {
		echo ("<script LANGUAGE='JavaScript'>
            window.alert('A senha atual não confere.');
            window.location.href='../pages/perfilcliente.php';
        </script>");
	}
} else {
	echo ("<script LANGUAGE='JavaScript'>
            window.alert('As senhas novas não conferem.');
            window.location.href='../pages/perfilcliente.php';
        </script>");
}
mysqli_close($connect);

?>