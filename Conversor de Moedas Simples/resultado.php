<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php
            $real = $_POST['real'];
            if($real == '' || $real < 0){
                echo"<script>alert('ERRO! Insira um valor valido')</script>";
                header("Refresh: 0 ; index.php");
            } else {
                $dolar = $real / 5.22;
                echo"<p>Seus <b>R$: ". number_format($real, 2, ',', '.')."</b> equivalem a <b>US$: ". number_format($dolar, 2, ',', '')."</b></p>";
            }
            echo"<b>Cotação fixa de R$: 5,22</b> informada diretamente no código."
        ?>
        <button type="submit" onclick="javascript:window.history.back()">Voltar</button>
    </main>
</body>
</html>
