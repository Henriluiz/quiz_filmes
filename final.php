<!DOCTYPE html>
<?php
    $p8 = $_POST["pergunta8"];
    session_start();
    if ($p8 == "Uma hora vivida localmente equivale a sete anos na Terra") {
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
        <link rel="stylesheet" href="./styles/final.css">
    </head>
    <body>
        <form action="index.php" method="post">
            <h2>RESULTADO DO QUIZ</h2>
            <p class="saudacao">Olá, <?php echo $_SESSION["nome"]." ".$_SESSION["sobrenome"]?></p>
            <div class="acertos"><?php echo $acertos."%"?></div>
            <div class="resultado_alt">
                <p><strong>Pergunta 1:</strong>  <?php echo $_SESSION["p1"]?></p>
                <p><strong>Pergunta 2:</strong>  <?php echo $_SESSION["p2"]?></p>
                <p><strong>Pergunta 3:</strong>  <?php echo $_SESSION["p3"]?></p>
                <p><strong>Pergunta 4:</strong>  <?php echo $_SESSION["p4"]?></p>
                <p><strong>Pergunta 5:</strong>  <?php echo $_SESSION["p5"]?></p>
                <p><strong>Pergunta 6:</strong>  <?php echo $_SESSION["p6"]?></p>
                <p><strong>Pergunta 7:</strong>  <?php echo $_SESSION["p7"]?></p>
                <p><strong>Pergunta 8:</strong>  <?php echo $_SESSION["p8"]?></p>
            </div>

            <p><input type="submit" value="Retorna"></p>
        </form>
    </body>
</html>