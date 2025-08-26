<?php
	$p4 = $_POST["pergunta4"];
	session_start();
	if ($p4 == "la la land: cantando estações") {
        $_SESSION["pontos"] += 1;
        $_SESSION["p4"] = $p4." "."✔";    
    } else {
        $_SESSION["p4"] = $p4." "."❌";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Pergunta 5</title>
        <link rel="stylesheet" href="./styles/style_qs.css">
    </head>
    <body>
        <form action="pergunta6.php" method="post">
            <h2>DE QUAL FILME É ESSA CENA?</h2>
            <img src="./img/p5.webp" alt="">
            <div class="alternativas">
                <label>
                    <input type="radio" name="pergunta5" value="Superman"> Superman
                </label>

                <label>
                    <input type="radio" name="pergunta5" value="Batman vs Superman: A Origem da Justiça"> Batman vs Superman: A Origem da Justiça
                </label>

                <label>
                    <input type="radio" name="pergunta5" value="Batman: O Cavaleiro das Trevas"> Batman: O Cavaleiro das Trevas
                </label>

                <label>
                    <input type="radio" name="pergunta5" value="Coringa"> Coringa
                </label>
            </div>
            <p><input type="submit" value="Próximo"></p>
        </form>
    </body>
</html>