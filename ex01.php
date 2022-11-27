<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title></title>

	<h4>Formulário do Exercício 01</h4>

</head>
<body>

	<a href="index.php">Voltar para Home</a>

	<h3>
		1. Crie um script PHP que apresente todos os números ímpares entre 1 e um número lido do teclado.
	</h3>


	<form action="ex01.php" method="post">

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
			$v2 = 1;

			if($v1 <= $v2)
			{
				$inicial = $v1;
				$final = $v2;
			}
			else
			{
				$inicial = $v2;
				$final = $v1;
			}

			echo "<p>Valores pares entre $inicial e $final: ";
			for ($i=$inicial; $i <= $final ; $i++) 
			{ 
				if($i % 2 != 0)
				{
					echo "$i; ";
				}
			}
			echo "</p>";
		}
	}


	?>



</body>
</html>