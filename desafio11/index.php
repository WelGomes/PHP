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
        $preco = $_GET["preco"] ?? "0";
        $reajuste = $_GET["reajuste"] ?? "0";
    ?>
    <main>
        <h2>Reajustador de Preços</h2>
        <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="$preco">
            <label for="reajuste" >Qual será o percentual de reajuste?(<b><span id="p"></span>%</b>)</label>
            <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" oninput="mudaValor()" value="$reajuste">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php
            $aumento = ($preco * $reajuste / 100) + $preco;
            echo "O produto que custava <b>R$: ". number_format($preco, 2, ",", ".") ."</b>, com <b>$reajuste%</b> de aumento vai passar a custar <b>R$: ". number_format($aumento, 2, ",", ".") ."</b> a partir de agora.";
        ?>
    </section>

    <script>
        mudaValor()
        function mudaValor(){
            p.innerText = reajuste.value;
        }
    </script>
</body>
</html>