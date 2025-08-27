<?php
	$nome= $_POST["nome"];
	$sobrenome = $_POST["sobrenome"];
	session_start();
	$_SESSION["nome"] = $nome;
	$_SESSION["sobrenome"] = $sobrenome;
	$_SESSION["pontos"] = 0;
	?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Pergunta 1</title>
		<link rel="stylesheet" href="./styles/style_qs.css">
	</head>
	<body>
		<form action="pergunta2.php" method="post">
			<h2>QUAL É O NOME DESSE ATOR?</h2>
			<img src="./img/p1.jfif">
			<br>
			<div class="alternativas">
				<label>
					<input type="radio" name="pergunta1" value="Aaron Paul" required>Aaron Paul
				</label>
		
				<label>
					<input type="radio" name="pergunta1" value="Jason Bateman"> Jason Bateman
				</label>

				<label>
					<input type="radio" name="pergunta1" value="Kevin Hart"> Kevin Hart
				</label>
		
				<label>
					<input type="radio" name="pergunta1" value="Dwayne Johnson"> Dwayne Johnson
				</label>
			</div>

			<p><input type="submit" value="Próximo"></p>
		</form>
	</body>
</html>