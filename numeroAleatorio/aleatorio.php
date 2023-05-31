<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Aleatório</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>

        <?php 
            $rand = rand(1, 100);
            echo "O valor gerado foi <strong>$rand</strong>";
        ?>

        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
    </main>
    
</body>
</html>