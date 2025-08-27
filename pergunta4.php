<?php
	$p3 = $_POST["pergunta3"];
	session_start();
	if  ($p3 == "1998") {
        $_SESSION["pontos"] += 1;
        $_SESSION["p3"] = $p3." "."✔";    
    } else {
        $_SESSION["p3"] = $p3." "."❌";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Pergunta 4</title>
        <link rel="stylesheet" href="./styles/style_qs.css">
    </head>
    <body>
        <form action="pergunta5.php" method="post">
            <h2>QUAL DESSES FILMES GANHOU O OSCAR DE 2017?</h2>
            <img src="./img/p4.jpg" alt="">
            <div class="alternativas">
                <label>
                    <input type="radio" name="pergunta4" value="A Chegada" required> A Chegada
                </label>

                <label>
                    <input type="radio" name="pergunta4" value="Moonlight: Sob a Luz do Luar"> Moonlight: Sob a Luz do Luar
                </label>

                <label>
                    <input type="radio" name="pergunta4" value="La La Land: Cantando estações"> La La Land: Cantando estações
                </label>

                <label>
                    <input type="radio" name="pergunta4" value="Até o Último Homem"> Até o Último Homem
                </label>
            </div>
            <p><input type="submit" value="Próximo"></p>
        </form>
    </body>
</html>