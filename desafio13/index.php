<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP 11</title>
</head>
<body>
    <?php
        $saque = $_GET["valor"] ?? 0;
    ?>
    <main>
        <h2>Caixa Eletrônico</h2>
        <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="get">
            <label for="valor">Qual o valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="valor" id="valor" value="<?= $saque ?>">
            <p style="font-size: 0.6em">*Notas disponíveis: R$100, R$:50, R$:10, R$:5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque de <?= $saque ?> realizado</h2>
        <?php 
            $resto = $saque;
            $tot100 = floor($resto / 100);
            $resto %= 100;

            $tot50 = floor($resto / 50);
            $resto %= 50;

            $tot10 = floor($resto / 10);
            $resto %= 10;

            $tot5 = floor($resto / 5);
            $resto %= 5;

             echo "O caixa eletrônico vai te entregar as seguintes notas:";
             echo "<ul>";
             echo "<li><img src='100-reais.jpg' alt='imagem'> <b>x$tot100</b> </li>";
             echo "<li><img src='50-reais.jpg' alt='imagem'> <b>x$tot50</b> </li>";
             echo "<li><img src='10-reais.jpg' alt='imagem'> <b>x$tot10</b> </li>";
             echo "<li><img src='5-reais.jpg' alt='imagem'> <b>x$tot5</b> </li>";
             echo "</ul>";
        ?>
    </section>
</body>
</html>