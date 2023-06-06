<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        //CAPTURANDO OS DADOS DO FORMULÁRIO RETROALIMENTADO
        $aNasc= $_GET['v1'] ?? 0;
        $aAtual = $_GET['v2'] ?? 0;
    ?>
    <main>
        <h1>Idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Em que ano você nasceu?</label>
            <input type="number" name="v1" id="v1" <?=$aNasc?>>
            <label for="v2">Quer saber sua idade em que ano? (atualmente estamos em <strong>2023</strong>)</label>
            <input type="number" name="v2" id="v2" <?=$aAtual?>>
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado</h2>
        <?php

           $idade = $aAtual - $aNasc;

           print "<p>Quem nasceu em $aNasc vai ter <strong>$idade anos </strong>em $aAtual!</p>"

        ?>
    </section>
    
</body>
</html>