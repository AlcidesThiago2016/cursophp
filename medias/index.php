<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        //CAPTURANDO OS DADOS DO FORMULÁRIO RETROALIMENTADO
        $num1 = $_GET['v1'] ?? 0;
        $pes1 = $_GET['v2'] ?? 0;
        $num2 = $_GET['v3'] ?? 0;
        $pes2 = $_GET['v4'] ?? 0;
    ?>
    <main>
        <h1>Medias</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">1 Valor</label>
            <input type="number" name="v1" id="v1" step="0.00001" <?=$num1?>>
            <label for="v2">1 Peso</label>
            <input type="number" name="v2" id="v2" step="0.00001" <?=$pes1?>>
            <label for="v3">2 Valor</label>
            <input type="number" name="v3" id="v3" step="0.00001" <?=$num2?>>
            <label for="v4">2 Peso</label>
            <input type="number" name="v4" id="v4" step="0.00001" <?=$pes2?>>
            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section id="resultado">
        <h2>Cálculo das Médias</h2>
        <?php

            $ma = ($num1 + $num2) / 2;
            $mp = ($num1*$pes1 + $num2*$pes2) / ($pes1 + $pes2);

            print "<p>Analisando os valores $num1 e $num2 :</p>";

            print "<ul><li>A <strong> Média Aritmética Simples</strong> entre os valores é igual a " .number_format($ma, 2, ",", ".") . ".</li>";

            print "<li>A <strong> Média Aritmética Ponderada</strong> com os pesos $pes1 e $pes2 é igual a " .number_format($mp, 2, ",", ".") . ".</li></ul>"

        ?>
    </section>
    
</body>
</html>