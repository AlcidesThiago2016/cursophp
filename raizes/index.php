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
        $numero = $_GET['v1'] ?? 0;
    ?>
    <main>
        <h1>Raízes</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">1ºValor</label>
            <input type="number" name="v1" id="v1" step="0.00001" <?=$numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php

            $raiz_quadrada = sqrt($numero);
            $raiz_cubica = pow($numero, 1/3);

            print "<p>Analisando o <strong>número $numero, </strong>temos:</p>";

            print "<ul><li>A sua raiz quadrada é <strong>" .number_format($raiz_quadrada, 3, ",", ".") . "</strong>.</li>";

            print "<li>A sua raiz cúbica é <strong>" .number_format($raiz_cubica, 3, ",", ".") . "</strong></li></ul>"

        ?>
    </section>
    
</body>
</html>