<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Mínimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        //CAPTURANDO OS DADOS DO FORMULÁRIO RETROALIMENTADO
        $salario = $_GET['v1'] ?? 0;
    ?>
    <main>
        <h1>Salário Mínimo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">Salário (R$)</label>
            <input type="number" name="v1" id="v1" value="<?=$salario?>">
            <p>Considerando o salário mínimo de <strong>R$1.380,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            const MINIMO = 1380;
            $qtdSalario = $salario / MINIMO;
            $sobra = $salario - ((INT)$qtdSalario * MINIMO);
            
            if($qtdSalario <= 1){
                print "<p> Quem recebe um salário de " . numfmt_format_currency($padrao, $salario, "BRL") . " ganha <strong>" . floor($qtdSalario) . " salário minimo</strong>  + " . numfmt_format_currency($padrao, $sobra, "BRL") . ".</p>";      
            }else{
                print "<p> Quem recebe um salário de " . numfmt_format_currency($padrao, $salario, "BRL") . " ganha <strong>" . floor($qtdSalario) . " salários minimos</strong>  + " . numfmt_format_currency($padrao, $sobra, "BRL") . ".</p>";
            };            
        ?>
    </section>
    
</body>
</html>