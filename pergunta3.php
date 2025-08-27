<?php
	$p2 = $_POST["pergunta2"];
	session_start();
	
    if ($p2 == "Edward Mãos de Tesoura") {
        $_SESSION["pontos"] += 1;
        $_SESSION["p2"] = $p2." "."✔";    
    } else {
        $_SESSION["p2"] = $p2." "."❌";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Pergunta 3</title>
        <link rel="stylesheet" href="./styles/style_qs.css">
    </head>
    <body>
        <form action="pergunta4.php" method="post">
            <h2>EM QUE ANO O FILME TITANIC GANHOU O OSCAR?</h2>
            <img src="./img/p3.jpeg" alt="">
            <div class="alternativas">
                <label>
                    <input type="radio" name="pergunta3" value="1997" required> 1997
                </label>

                <label>
                    <input type="radio" name="pergunta3" value="1998"> 1998
                </label>

                <label>
                    <input type="radio" name="pergunta3" value="1999"> 1999
                </label>

                <label>
                    <input type="radio" name="pergunta3" value="1996"> 1996
                </label>
            </div>
            
            <p><input type="submit" value="Próximo"></p>
        </form>
    </body>
</html>