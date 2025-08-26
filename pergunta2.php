<?php
	$p1 = $_POST['pergunta1'];
	session_start();

    if ($p1 == "Kevin Hart") {
        $_SESSION["pontos"] += 1;
        $_SESSION["p1"] = $p1." "."✔";    
    } else {
        $_SESSION["p1"] = $p1." "."❌";
    }
	?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Pergunta 2</title>
        <link rel="stylesheet" href="./styles/style_qs.css">
    </head>
    <body>
        <form action="pergunta3.php" method="post">
            <h2>QUAL É O NOME DESSE FILME?</h2>
                <img src="./img/p2.jpeg" alt="">
            <div class="alternativas">
                <label>
                    <input type="radio" name="pergunta2" value="Edward Mãos de Tesoura"> Edward Mãos de Tesoura
                </label>

                <label>
                    <input type="radio" name="pergunta2" value="Edward Mãos de Serra"> Edward Mãos de Serra
                </label>

                <label>
                    <input type="radio" name="pergunta2" value="Edward Mãos de Faca"> Edward Mãos de Faca
                </label>

                <label>
                    <input type="radio" name="pergunta2" value="Edward: O mãos de tesoura"> Edward: O mãos de tesoura
                </label>
            </div>
            
            <p><input type="submit" value="Próximo"></p>
        </form>
    </body>
</html>