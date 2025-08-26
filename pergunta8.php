<?php
	$p7 = $_POST["pergunta7"];
	session_start();
	if ($p7 == "Martin Goodman") {
        $_SESSION["pontos"] += 1;
        $_SESSION["p7"] = $p7." "."✔";    
    } else {
        $_SESSION["p7"] = $p7." "."❌";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Pergunta 8</title>
        <link rel="stylesheet" href="./styles/style_qs.css">
    </head>
    <body>
        <form action="final.php" method="post">
            <h2>NO FILME "INTERESTELAR" UMA HORA NO PLANETA MILLER VIRA QUANTO TEMPO NO PLANETA TERRA?</h2>
            <img src="./img/p7.jpg" alt="">
            <div class="alternativas">
                <label>
                    <input type="radio" name="pergunta8" value="uma hora vivida localmente equivale a quatro anos na Terra"> Uma hora vivida localmente equivale a quatro anos na Terra
                </label>

                <label>
                    <input type="radio" name="pergunta8" value="duas horas vivida localmente equivale a cinco anos na Terra"> Duas hora vivida localmente equivale a cinco anos na Terra
                </label>

                <label>
                    <input type="radio" name="pergunta8" value="duas horas vivida localmente equivale a seis anos na Terra"> Duas hora vivida localmente equivale a seis anos na Terra
                </label>

                <label>
                    <input type="radio" name="pergunta8" value="uma hora vivida localmente equivale a sete anos na Terra"> Uma hora vivida localmente equivale a sete anos na Terra
                </label>
            </div>
            <p><input type="submit" value="Próximo"></p>
        </form>
    </body>
</html>