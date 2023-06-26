<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Raízes</title>
</head>
<body>
    <?php
        $numero = $_GET["numero"] ?? 0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER["PHP_SELF"];?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" value="<?= $numero ?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h1>Resultado Final</h1>
        <?php

            $raizQuadrada = sqrt($numero);
            $raizcubica = pow($numero,1/3);
            echo "Analisando o <b>número $numero</b>, temos :";
            echo "<ul>";
            echo "<li>A sua raiz quadrada é <b>".number_format($raizQuadrada, 3, ",")."</b></li>";
            echo "<li>A sua raiz cúbica é <b>".number_format($raizcubica, 3, ",")."</b></li>";
            echo "</ul>";

        ?>
    </section>
</body>
</html>