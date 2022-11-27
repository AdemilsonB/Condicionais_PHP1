<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Exemplo - Select</title>
</head>
<body>

	<h1>Exemplo de Select e Pré-formulário</h1>


	<form action="index.php" method="post">

		<p>
			<label>Selecione uma opção:</label><br>
			<select name="op">
				<option value="Bolinho">Bolinho</option>
				<option value="Xileibows">Xileibows</option>
				<option selected value="She Labels">She Labels</option>
			</select>
		</p>

		<button type="submit" name="iniciar">Iniciar</button>
		
	</form>


	<?php  

	if (isset($_POST['iniciar']))
	{
		$op = $_POST['op'];

		echo "<h3>Opção selecionada: $op</h3>";
	
	?>

	<h3>Cadastro</h3>
	<form method="post" action="venda.php">
		
		<p>
			<label>Campo 1:</label><br>
			<input type="text" name="campo1">
		</p>

		<p>
			<label>Campo 2:</label><br>
			<input type="text" name="campo2">
		</p>


		<p>
			<label>Selecione uma opção:</label><br>
			<select name="bebida">
				
				<option selected disabled>-- Selecione uma Opção --</option>
				<option value="1">Toddy</option>
				<option value="2">Nescau</option>
				<option value="3">Café</option>
				<option value="4">Chá</option>

			</select>
		</p>

		<p>
			<button type="submit" name="enviar">Enviar</button>
		</p>

	</form>

	<?php 

	} // fim do if 'op'

	 ?>


</body>
</html>