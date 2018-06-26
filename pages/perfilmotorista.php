<!doctype html>
<html lang="pt-br">
<head>
	<?php
	include("../php/session.php");
	?>
	<!-- Meta tags Obrigatórias -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Perfil Motorista</title>
</head>
<body>
	<?php
		include("../php/navbar.php");
	?>

	<div class="container-fluid">
		<legend><center><h2><b>Perfil Motorista</b></h2></center></legend><br>
		<div class="col-lg-12">
			<div class="col-lg-10">
				<div class="row">
					<div class="col-lg-5">
						<img src="../img/user.png" alt="Avatar" class="img-thumbnail avatar float-right">
					</div>
					<div class="col-lg-5">
						<form class="form-horizontal center">
							<div class="form-group">
								<label for="nomeDono">Nome:</label>
								<input type="text" class="form-control" id="nomeDono" value="<?php echo"$username[nome]" ?>" readonly>
							</div>
							<div class="form-group">
								<label for="E-mail">E-mail:</label>
								<input type="text" class="form-control" id="nomeDono" value="<?php echo"$logado"?>" readonly>
							</div>
							<div class="form-group">
								<label for="Telefone">Telefone:</label>
								<input type="text" class="form-control" id="Telefone" value="<?php echo"$username[telefone]" ?>" readonly>
							</div>
							<div class="form-group">
								<label for="Veiculo">Número de Veículos:</label>
								<input type="text" class="form-control" id="Veiculo" name="qtdVeiculos" value="<?php echo"$qntVeiculo"; ?>" readonly>
							</div>
							<button type="button" class="btn btn-primary">Salvar</button>
							<hr>
							<button type="button" class="btn btn-info" data-toggle="modal" data-target="#changePassword">
								Alterar Senha
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
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

<!--Modals-->
<div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="changePassword" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Alterar Senha</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="../php/alterarSenha.php">
					<div class="form-group">
						<label for="actualPassword">Senha Atual</label>
						<input type="password" class="form-control" name="senhaAtual" id="senhaAtual">
					</div>
					<div class="form-group">
						<label for="newePassword">Nova Senha</label>
						<input type="password" class="form-control" name="senhaNova" id="senhaNova">
					</div>
					<div class="form-group">
						<label for="confirmedPassword">Confirmar Senha</label>
						<input type="password" class="form-control" name="senhaNovaConf" id="senhaNovaConf">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fechar</button>
						<button type="submit" value="submit" id="submit" name="submit" class="btn btn-outline-primary">Alterar Senha</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>