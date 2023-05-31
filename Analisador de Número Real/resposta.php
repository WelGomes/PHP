<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Analisador de Número Real</title>
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php
            $numero = $_POST['numero'];
            echo"<p>Analisando o número <b>". number_format($numero, 3, ',', '.')."</b> Informado pelo usuário:</p>";
            if($numero == ''){
                echo "<script>alert('ERRO! Insira algum valor');</script>";
                header("Refresh: 0 ; index.php");
            } else{
            $int = (int) $numero;
            $fra = $numero - $int;
            echo "<ul><li> A parte inteira do número é <b>".number_format($int, 0, ',', '.')."</b></li>";
            echo "<li> A parte fracionaria do número é <b>".number_format($fra, 3, ',', '.')."</b></li>";
            }
        ?>
        <button type="submit" onclick="javascript:window.history.back()">Voltar</button>
    </main>
</body>
</html>