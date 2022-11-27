<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="formatar.css">
	<title></title>

	<h2 class="cor1">Formulário do Exercício 02</h2>
</head>
<body>

	<a href="index.php">Voltar para Home</a>

	<h3>
		Elabore um script que apresente na tela a tabuada de um número lido do teclado.
	</h3>

	<form action="ex02.php" method="post">
		<p>
			<label>digite um número: </label>
			<input type="number" name="v1" class="btn send2">
		</p>

		<p>
			<button type="submit" name="enviar" class="btn send">Enviar</button>
			<button type="reset" name="apagar" class="btn send">Apagar</button>
		</p>	
	</form>

	<?php 

	if (isset($_POST['enviar'])) 
	{
		if(empty($_POST['v1']))
		{
			echo "<h4>Por favor preencha os dados necessários!</h4>";
		}
		else 
		{
			$v1 = $_POST['v1'];

			for ($i=0; $i <= 10 ; $i++) 
			{ 
				$resut = $v1 * $i;
				echo "$v1 x $i: $resut <br>";
			}
		}
	}
	?>

</body>
</html>