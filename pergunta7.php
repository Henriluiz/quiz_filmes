<?php
	$p6 = $_POST["pergunta6"];
	session_start();
	if ($p6 == "Coadjuvantes") {
        $_SESSION["pontos"] += 1;
        $_SESSION["p6"] = $p6." "."✔";    
    } else {
        $_SESSION["p6"] = $p6." "."❌";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Pergunta 7</title>
        <link rel="stylesheet" href="./styles/style_qs.css">
    </head>
    <body>
        <form action="pergunta8.php" method="post">
            <h2>QUEM É O FUNDADOR DA MARVEL?</h2>
            <img src="./img/p8.webp" alt="">
            <div class="alternativas">
                <label>
                    <input type="radio" name="pergunta7" value="Stanley Martin Lieber"> Stanley Martin Lieber (Stan lee)
                </label>

                <label>
                    <input type="radio" name="pergunta7" value="Martin Goodman"> Martin Goodman
                </label>

                <label>
                    <input type="radio" name="pergunta7" value="Kevin Feige"> Kevin Feige
                </label>

                <label>
                    <input type="radio" name="pergunta7" value="Walt Disney Company"> Walt Disney Company
                </label>
            </div>

            <p><input type="submit" value="Próximo"></p>
        </form>
    </body>
</html>