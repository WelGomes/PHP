<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Idade por Ano</title>
</head>
<body>
    <?php
        $data = date("Y");
        $nascimento = $_GET["nascimento"] ?? 2000;
        $ano = $_GET["ano"] ?? $data;
    ?>
    <main>
        <h2>Calculando a sua idade</h2>
        <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="get">
            <label for="nascimento">Em que ano você nasceu?</label>
            <input type="number" name="nascimento" id="nascimento" value="<?= $nascimento ?>" max="<?= $data ?>">
            <label for="ano">Quer saber sua idade em que ano?(atualmente estamos em <b><?= $data ?></b>)</label>
            <input type="number" name="ano" id="ano"  value="<?= $data ?>" min="<?= $data ?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php
            $resultado = $ano - $nascimento; 
            echo "Quem nasceu em <b>$nascimento</b> vai ter <b>$resultado anos</b> em <b>$ano</b>";
        ?>
    </section>
</body>
</html>