<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cálculo de Tempo</title>
</head>
<body>
    <?php

        $segundos = $_GET["segundos"] ?? 0;
        $sobra = $segundos;

    ?>
    <main>
        <h2>Calculadora de Tempo</h2>
        <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="get">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="segundos" step="0.000.000" value="<?= $segundos ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <?php
            
            $semana = (int) ($sobra / 604_800);
            $sobra = $sobra % 604_800;

            $dia = (int) ($sobra / 86_400);
            $sobra = $sobra % 86_400;
            
            $hora = (int) ($sobra / 3_600);
            $sobra = $sobra % 3_600;

            $minuto = (int) ($sobra / 60);
            $sobra = $sobra % 60;

            $segundo = $sobra;

            echo "Analisando o valor que você digitou, <b>". number_format($segundos, 3, ".", ",") ."</b>";
            echo "<ul>";
            echo "<li><b>$semana</b> semanas</li>";
            echo "<li><b>$dia</b> dias</li>";
            echo "<li><b>$hora</b> horas</li>";
            echo "<li><b>$minuto</b> minutos</li>";
            echo "<li><b>$segundo</b> segundos</li>";
            echo "</ul>";

        ?>
    </section>
</body>
</html>