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

	<title>Cadastro de Vans</title>
</head>
<body>
	<?php
	include("../php/navbar.php")
	?>
	<div class="container-fluid">
		<legend><center><h2><b>Cadastro de Van</b></h2></center></legend><br>
		<div class="col-lg-12">
			<div class="row">
				<?php
				include("../php/gerenciarVeiculos.php");
				?>
			</div>
		</div>
		<footer class="text-center fixed-bottom">
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

	<!-- Modal -->

	<!-- JavaScript (Opcional) -->
	<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>