<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    </header>
    <main>
        <h1> Resultado Final</h1>
        <p>
            <?php

                $numero = $_GET["numero"];
                echo "<p>O número escolhido foi <strong>$numero</strong>";
                $ant = $numero - 1;
                echo "<p>O número <i>antecessor</i> é <strong>$ant</strong>";
                $suc = $numero + 1;
                echo "<p>O número <i>sucessor</i> é <strong>$suc</strong>";

            ?>
        </p>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </main>
</body>
</html>