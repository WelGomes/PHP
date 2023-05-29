<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sorteador de Números</title>
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
            <p>Gerando um número aleatório entre 0 e 100...</p>
             <?php
                $numeros = mt_rand(0, 100);
                echo"<p>O número gerado foi <b>$numeros</b></p>"
            ?>
            <button type="submit" onclick="javascript:document.location.reload()">Gerar outro número</button>
    </main>
</body>
</html>