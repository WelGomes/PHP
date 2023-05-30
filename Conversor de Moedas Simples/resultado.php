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
                echo"<p>Seus <b>R$: ". $real."</b> equivalem a <b>". number_format($dolar, 2, ',', '')."</b></p>";
            }
            echo"<b>Cotação fixa de R$: 5,22</b> informada diretamente no código."
        ?>
        <a href="javascript:window.history.back()"><button type="submit">Voltar</button></a>
    </main>
</body>
</html>