<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Médias</title>
</head>
<body>
    <?php
    
        $valor1 = $_GET["v1"] ?? 0; 
        $valor2 = $_GET["v2"] ?? 0;
        $peso1 = $_GET["p1"] ?? 1;
        $peso2 = $_GET["p2"] ?? 1;
    
    ?>
    <main>
        <h2>Médias Aritméticas</h2>
        <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="get">
        <label for="v1">1°Valor</label>
        <input type="number" name="v1" id="v1" value="<?= $valor1 ?>" required>
        <label for="p1">1°Peso</label>
        <input type="number" name="p1" id="p1" value="<?= $peso1 ?>" min="1">
        <label for="v2">2°Valor</label>
        <input type="number" name="v2" id="v2" value="<?= $valor2 ?>" required>
        <label for="p2">2°Peso</label>
        <input type="number" name="p2" id="p2" value="<?= $peso2 ?>" min="1">
        <input type="submit" value="Calcular Média">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php
           
            $mediaSimples = ($valor1 + $valor2) / 2;
            $mediaPonderada = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);

            echo "Analisando os valores <b>$valor1</b> e <b>$valor2</b>";
            echo "<ul>";
            echo "<li>A <b>Média Aritmética Simples</b> entre os valores é igual a <b>". number_format($mediaSimples, 2, "," , ".") ."</b></li>";
            echo "<li>A <b>Média Aritmética Ponderada</b> com pesos <b>". $peso1 ."</b> e <b>". $peso2 ."</b> é igual a <b>". number_format($mediaPonderada, 2, ",", ".") ."</b></li>";
            echo "</ul>";

        ?>
    </section>
</body>
</html>