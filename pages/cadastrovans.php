<!doctype html>
<html lang="pt-br">
<head>
	<?php
	include("../php/session.php")
	?>
	<!-- Meta tags Obrigatórias -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Material Design Bootstrap -->
	<link href="css/mdb.min.css" rel="stylesheet">

	<title>Cadastro de Vans</title>
</head>
<body>
	<?php
		include("../php/navbar.php")
	?>
	<div class="container-fluid">
		<legend><center><h2><b>Cadastro de Van</b></h2></center></legend><br>
		<div class="col-lg-12">
			<div class="col-lg-10">
				<form class="form-horizontal center" method="POST" action="../php/cadastrarVeiculo.php">
					<div class="form-group col-4">
						<label for="nomeDono">Dono da Van</label>
						<input type="text" class="form-control" id="nomeDono" name="nomeDono" value="<?php echo"$username[nome]"?>" readonly>
					</div>
					<div class="form-group col-4">
						<label for="nomeMotorista">Motorista</label>
						<input type="text" class="form-control" id="nomeMotorista" name="nomeMotorista" placeholder="Nome do Motorista do Veículo">
					</div>
					<div class="form-group col-4">
						<label for="telMotorista">Telefone</label>
						<input type="text" class="form-control" id="telMotorista" name="telMotorista" placeholder="Telefone do Motorista do Veículo">
					</div>
					<div class="form-group col-4">
						<label for="staticEmail">Email</label>
						<input type="email" class="form-control" id="emailMotorista" name="emailMotorista" placeholder="ex: joao.paulo@gmail.com">
					</div>
					<div class="form-group col-4">
						<label for="placaModelo">Placa do Veículo</label>
						<input type="text" class="form-control" id="placaVeiculo" name="placaVeiculo" placeholder="ex: HAL-9000">
					</div>
					<hr>
					<div class="form-group col-4">
						<h5>Rota</h5>
						<label for="bairroSaida">Partida</label>
						<input type="text" class="form-control" id="bairroPartida" name="bairroPartida" placeholder="Digite o nome do bairro de partida">
					</div>
					<div class="form-group col-4">
						<label for="bairroSaida">Destino</label>
						<input type="text" class="form-control" id="bairroDestino" name="bairroDestino" placeholder="Digite o nome do bairro de destino">
					</div>
					<hr>
					<div class="col-2">
						<button type="submit" value="submit" id="submit" name="submit" class="btn btn-success">Cadastrar Van</button>
					</div>
				</form>
			</div>
		</div>
		<footer class="text-center">
			<div class="footer-above">
				<div class="container">
					<div class="row">
						<div class="footer-col col-md-4">
						</div>
						<div class="footer-col col-md-4">
							<h3>Contatos</h3>
							<ul class="list-inline">
								<li>
									<a class="btn-social btn-outline"><i class="fa fa-fw fa-whatsapp"></i> +55 (31) 98416-1603</a>
								</li>
								<li>
									<a class="btn-social btn-outline"><i class="fa fa-fw fa-envelope"></i> contato@grandcarry.com.br</a>
								</li>
							</ul>
						</div>
						<div class="footer-col col-md-4">
						</div>
					</div>
				</div>
			</div>
			<div class="footer-below">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							Copyright &copy; GrandCarry 2018
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<!-- JavaScript (Opcional) -->
	<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>