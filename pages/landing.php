<!doctype html>
<html lang="pt-br">
<head>
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

	<title>GrandCarry - Te levando mais longe</title>
</head>
<body>
	<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">GrandCarry</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" data-toggle="modal" data-target="#loginModal">Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="modal" data-target="#registerModal"}">Cadastrar</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container-fluid">
		<div class="cadastro">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4 info">
						<div class="jumbotron jumbotron-fluid">
							<div class="container text-center">
								<h1 class="display-4">Como Funciona?</h1>
								<p class="lead">O GrandCarry é uma plataforma que visa facilitar a localização de veículos de transporte escolar/universitário, através de um incrível sistema de filtragem por localização.</p>
								<p class="lead">Junte-se a nós e encontre o transporte ideal.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 info">
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
	</div>

	<!-- Modals -->
	<!--Login Modal-->
	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Fazer Login</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="../php/login.php">
						<div class="form-group">
							<label for="loginEmail">E-Mail</label>
							<input type="email" class="form-control" name="loginEmail" id="loginEmail" placeholder="nome@exemplo.com.br"/>
						</div>
						<div class="form-group">
							<label for="loginPassword">Senha</label>
							<input type="password" class="form-control" name="loginPassword" id="loginPassword" placeholder="Senha"/>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fechar</button>
							<button type="submit" value="entrar" id="entrar" name="entrar" class="btn btn-outline-primary">Login</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--Login Modal-->

	<!--Register Modal-->
	<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModal" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Cadastrar-se</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="../php/registrar.php">
						<div class="form-group">
							<label for="registerName">Nome</label>
							<input type="text" class="form-control" name="registerName" id="registerName" placeholder="Nome Completo">
						</div>
						<div class="form-group">
							<label for="loginEmail">E-mail</label>
							<input type="email" class="form-control" name="registerEmail" id="registerEmail" placeholder="nome@exemplo.com.br">
						</div>
						<div class="form-group">
							<label for="loginPassword">Senha</label>
							<input type="password" class="form-control" name="registerPassword" id="registerPassword" placeholder="Senha">
						</div>
						<div class="form-group">
							<label for="registerPhone">Telefone</label>
							<input type="text" class="form-control bfh-phone" data-format="(ddd) ddddd-dddd" name="registerPhone" id="registerPhone" placeholder="(XX) XXXXX-XXXX">
						</div>
						<div class="form-group">
							<div class="row">
								<legend class="col-form-label col-sm-5 pt-0">Cadastrar como:</legend>
								<div class="col-sm-10">
									<div class="form-check">
										<input class="form-check-input" type="radio" name="registerProfile" id="registerProfile" value="motorista" checked/>
										<label class="form-check-label" for="registerProfile"/>
										Motorista
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="registerProfile" id="registerProfile" value="passageiro"/>
									<label class="form-check-label" for="registerProfile"/>
									Passageiro
								</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fechar</button>
				<button type="submit" value="submit" id="submit" name="submit" class="btn btn-outline-primary">Cadastrar</button>
			</div>
		</form>
	</div>
</div>
</div>

<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>