<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title></title>

	<h2>Formulário do Exercício 03</h2>
</head>
<body>

	<a href="index.php">Voltar para Home</a>

	<h3>
		Faça um programa que calcule o fatorial de um número positivo qualquer.
	</h3>

	<form action="ex03.php" method="post">
		<p>
			<label>digite um número</label>
			<input type="number" name="v1">
		</p>

		<p>
			<button type="submit" name="enviar">Enviar</button>
			<button type="reset" name="apagar">Apagar</button>
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
			$resut = $v1;

			for ($i=$v1; $i > 1 ; $i--) 
			{ 
				$resut *= $v1;
				$i--;

			}
			echo "o fatorial de $v1: $resut";
			$resut = number_format($resut, 2);
		}
	}
	?>

</body>
</html>