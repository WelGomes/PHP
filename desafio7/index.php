<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP 7</title>
</head>
<body>
    <?php

        $minimo = 1_380.60;
        $salario = $_GET['salario'] ?? $minimo;        
       
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'];?>" method="get">
            <label for="salario">Salário R$:</label>
            <input type="number" name="salario" id="salario" value="<?= $salario?>" step="0.01">
            <?= "<p>Considerando o salário mínimo de <b>R$: ". number_format($minimo, 2, ",", ".")."</b></p>";?>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php
           
            $total = intdiv((int) $salario, (int) $minimo);
            $resto = (int) $salario % (int) $minimo;
            echo "<p>Quem recebe um salário de <b>".number_format($salario, 2, ',', '.')."</b> ganha <b>$total</b> salários mínimos + <b>R$: ".number_format($resto, 2, ',', '.')."</b></p>";

        ?>
    </section>
</body>
</html>