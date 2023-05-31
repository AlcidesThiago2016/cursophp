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
        <h1> Conversor de Moedas V1.0</h1>
    </header>
    <main>
        <?php

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

             const DOLAR = 5.22;
             $valor = $_GET["valor"];
             $conversao = number_format(($valor / DOLAR),2,'.',);
             echo "<p>Seus " . numfmt_format_currency($padrao, $valor, "BRL") . " equivalem a " . "<strong>" . numfmt_format_currency($padrao, $conversao, "USD");
             echo "<p><strong>*Cotação fixa de R$5,22 informada diretamente no codigo.</strong>";
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </main>
</body>
</html>