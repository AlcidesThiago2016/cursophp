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

            $inicio = date("m-d-Y", strtotime(" -7 days"));
            $fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

             $valor = $_GET["valor"];
             $conversao = number_format(($valor / $cotacao),2,'.',);
             echo "<p>Seus " . numfmt_format_currency($padrao, $valor, "BRL") . " equivalem a " . "<strong>" . numfmt_format_currency($padrao, $conversao, "USD");
             echo "<p><strong>*Cotação fixa de $cotacao informada diretamente do site www.bcb.gov.br.</strong>";
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </main>
</body>
</html>