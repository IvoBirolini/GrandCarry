<?php

$connect = mysqli_connect('localhost','admin','0513044','grandcarry');

$veiculos = mysqli_query($connect, "SELECT * FROM veiculos");
$fill = mysqli_fetch_array($veiculos);

while ($row = mysqli_fetch_array($veiculos)){
echo("
<div class='col-sm-3'>
	<div class='card'>
		<div class='card-header'>
			<h5>$row[motorista]</h5>
		</div>
		<div class='card-body'>
			<form>
				<div class='form-group'>
					<label for='partida'>Partida</label>
					<input type='text' class='form-control' name='partida' id='partida' value='$row[partida]' readonly>
				</div>
				<div class='form-group'>
					<label for='destino'>Destino</label>
					<input type='text' class='form-control' name='destino' id='destino' value='$row[destino]' readonly>
				</div>
				<div class='form-group'>
					<label for='placa'>Placa</label>
					<input type='text' class='form-control' name='placa' id='placa' value='$row[placa]' readonly>
				</div>
				<hr>
				<button type='submit' value='submit' id='submit' name='submit' class='btn btn-info'><a data-toggle='modal' data-target='#$row[ID]'>Ver Veículo</a></button>
			</form>
		</div>
	</div>
</div>
");
echo("
<div class='modal fade' id='$row[ID]' tabindex='-1' role='dialog' aria-labelledby='loginModal' aria-hidden='true'>
	<div class='modal-dialog' role='document'>
		<div class='modal-content'>
			<div class='modal-header'>
				<h5 class='modal-title' id='exampleModalLabel'>Perfil do Veículo</h5>
				<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
					<span aria-hidden='true'>&times;</span>
				</button>
			</div>
			<div class='modal-body'>
				<form>
					<div class='form-group'>
						<label for='motorista'>Motorista</label>
						<input type='text' class='form-control' name='motorista' id='motorista' value='$row[motorista]' readonly>
					</div>
					<div class='form-group'>
						<label for='nomeDono'>Dono do Veículo</label>
						<input type='text' class='form-control' name='nomeDono' id='nomeDono' value='$row[nomeDono]' readonly>
					</div>
					<div class='form-group'>
						<label for='placa'>Placa</label>
						<input type='text' class='form-control' name='placa' id='placa' value='$row[placa]' readonly>
					</div>
					<hr>
					<div class='form-group'>
						<h5>Rota</h5>
						<hr>
						<label for='partida'>Partida</label>
						<input type='text' class='form-control' name='partida' id='partida' value='$row[partida]' readonly>
						<label for='destino'>Destino</label>
						<input type='text' class='form-control' name='destino' id='destino' value='$row[destino]' readonly>
					</div>
					<div class='form-group'>
						<h5>Contato</h5>
						<hr>
						<label for='telMotorista'>Telefone</label>
						<input type='text' class='form-control' name='telMotorista' id='telMotorista' value='$row[telefone]' readonly>
						<label for='email'>E-mail</label>
						<input type='text' class='form-control' name='email' id='email' value='$row[email]' readonly>
					</div>
					<div class='modal-footer'>
						<button type='button' class='btn btn-outline-secondary' data-dismiss='modal'>Fechar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
");
}
mysqli_close($connect);
?>