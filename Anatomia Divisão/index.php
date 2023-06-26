<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Anatomia Divisão</title>
</head>
<body>
    <?php

        $n1 = $_GET["n1"] ?? 0;
        $n2 = $_GET["n2"] ?? 1;

    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="n1">Dividendo</label>
            <input type="number" name="n1" id="n1" value="<?= $n1 ?>">
            <label for="n2">Divisor</label>
            <input type="number" name="n2" id="n2" value="<?= $n2 ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h1>Estrutura da Divisão</h1>
        <?php

            $resto = $n1 % $n2;
            $quociente = intdiv($n1, $n2);
        
        ?>
        <table class="divisao">
            <tr>
                <td><?= $n1 ?></td>
                <td><?= $n2 ?></td>
            </tr>
            <tr>
                <td><?= $resto ?></td>
                <td><?= $quociente ?></td>
            </tr>
        </table>
    </section>
</body>
</html>