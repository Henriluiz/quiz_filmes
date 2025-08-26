<?php
	$p5 = $_POST["pergunta5"];
	session_start();
	if ($p5 == "Coringa") {
        $_SESSION["pontos"] += 1;
        $_SESSION["p5"] = $p5." "."✔";    
    } else {
        $_SESSION["p5"] = $p5." "."❌";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Pergunta 6</title>
        <link rel="stylesheet" href="./styles/style_qs.css">
    </head>
    <body>
        <form action="pergunta7.php" method="post">
            <h2>QUAL É FUNÇÃO DESSES PERSONGAENS?</h2>
            <img src="./img/p6.jpg" alt="">
            <div class="alternativas">
                <label>
                    <input type="radio" name="pergunta6" value="Protagonistas"> Protagonistas
                </label>

                <label>
                    <input type="radio" name="pergunta6" value="Antagonistas"> Antagonistas
                </label>

                <label>
                    <input type="radio" name="pergunta6" value="Coadjuvantes"> Coadjuvantes
                </label>

                <label>
                    <input type="radio" name="pergunta6" value="Figurantes"> Figurantes
                </label>
            </div>
            <p><input type="submit" value="Próximo"></p>
        </form>
    </body>
</html>