<!DOCTYPE html>
<?php
    $p8 = $_POST["pergunta8"];
    session_start();
    if ($p8 == "uma hora vivida localmente equivale a sete anos na Terra") {
        $_SESSION["pontos"] += 1;
        $_SESSION["p8"] = $p8." "."✔";    
    } else {
        $_SESSION["p8"] = $p8." "."❌";
    }


    $total_pontos = $_SESSION["pontos"];
    $acertos = ($total_pontos/8) * 100;
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado final</title>
        <link rel="stylesheet" href="./styles/style_qs.css">
    </head>
    <body>
        <form action="index.php" method="post">
            <h2>RESULTADO DO QUIZ</h2>
            <p>Olá, <?php echo $_SESSION["nome"]." ".$_SESSION["sobrenome"]?></p>
            <p>Pergunta 1: <?php echo $_SESSION["p1"]?></p>
            <p>Pergunta 2: <?php echo $_SESSION["p2"]?></p>
            <p>Pergunta 3: <?php echo $_SESSION["p3"]?></p>
            <p>Pergunta 4: <?php echo $_SESSION["p4"]?></p>
            <p>Pergunta 5: <?php echo $_SESSION["p5"]?></p>
            <p>Pergunta 6: <?php echo $_SESSION["p6"]?></p>
            <p>Pergunta 7: <?php echo $_SESSION["p7"]?></p>
            <p>Pergunta 8: <?php echo $_SESSION["p8"]?></p>
            <p><?php echo $acertos."%"?></p>

            <p><input type="submit" value="Retorna"></p>
        </form>
    </body>
</html>