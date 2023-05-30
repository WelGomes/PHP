<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de moedas v1.0</title>
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <form action="resultado.php" method="post">
            <label>Quantos R$ você tem na carteira?</label>
            <input type="number" name="real" id="real" step="0.01">
            <button type="submit">Converter</button>
        </form>
    </main>
</body>
</html>