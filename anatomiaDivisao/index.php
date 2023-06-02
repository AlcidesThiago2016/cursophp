<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia da Divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        //CAPTURANDO OS DADOS DO FORMULÁRIO RETROALIMENTADO
        $dividendo = $_GET['v1'] ?? 0;
        $divisor = $_GET['v2'] ?? 0; 
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">Dividendo</label>
            <input type="number" name="v1" id="v1" value="<?=$dividendo?>">
            <label for="v2">Divisor</label>
            <input type="number" name="v2" id="v2" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php
            $resto = $dividendo % $divisor;
            $div = $dividendo / $divisor;
            print "<p>O dividendo é <strong>$dividendo.</strong></p>"; 
            print "<p>O divisor é <strong>$divisor.</strong></p>"; 
            print "<p>O resto da divisão $dividendo / $divisor é <strong>$resto.</strong></p>"; 
            print "<p>O resultado da divisão $dividendo / $divisor é <strong>" . number_format($div, 0, ",", ".") . "</strong></p>"; 
        ?>
    </section>
    
</body>
</html>