<?php

$tipo = mysqli_query($connect, "SELECT * FROM usuarios WHERE email = '$logado'");
$getTipo = mysqli_fetch_array($tipo);

if ($getTipo['tipo'] == 'motorista') {
	echo ("<nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
		<a class='navbar-brand' href='#'>GrandCarry</a>
		<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
		<span class='navbar-toggler-icon'></span>
		</button>
		<div class='collapse navbar-collapse' id='navbarNav'>
		<ul class='navbar-nav'>
		<li class='nav-item active'>
		<a class='nav-link' href='gestaoclientes.php'>Gestão de Clientes</a>
		</li>
		<li class='nav-item active'>
		<a class='nav-link' href='cadastrovans.php'>Cadastro de Vans</a>
		</li>
		<li class='nav-item active'>
		<a class='nav-link' href='perfilmotorista.php'>Perfil</a>
		</li>
		</ul>
		<ul class='navbar-nav ml-auto'>
		<li class='nav-item'>
		<a href='landing.php' class='nav-link'>Sair</a>
		</li>
		</ul>
		</div>
		</nav>");
} else {
	echo("<nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
		<a class='navbar-brand' href='#'>GrandCarry</a>
		<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
		<span class='navbar-toggler-icon'></span>
		</button>
		<div class='collapse navbar-collapse' id='navbarNav'>
		<ul class='navbar-nav'>
		<li class='nav-item active'>
		<a class='nav-link' href='pesquisa.php'>Procurar</a>
		</li>
		<li class='nav-item active'>
		<a class='nav-link' href='perfilcliente.php'>Perfil </a>
		</li>
		</ul>
		<ul class='navbar-nav ml-auto'>
		<li class='nav-item'>
		<a href='landing.php' class='nav-link'>Sair</a>
		</li>
		</ul>
		</div>
		</nav>");
}

?>