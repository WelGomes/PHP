<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Antecesso e Sucessor Resultado</title>
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <?php
            $numero = $_POST['numero'];
            if ($numero < 0 || $numero == '') {
                echo "<script>alert('ERRO! Insira algum número positivo');</script>";
                header("Refresh: 0; index.php");
            } else if ($numero == 0) {
                echo "O número escolhido foi <b>". $numero."</b><br>
                O seu antecessor é <b>". ($numero)."</b><br>
                O seu sucessor é <b>". ($numero + 1)."</b>";
            }  else {
                echo "O número escolhido foi <b>". $numero."</b><br>
                O seu antecessor é <b>". ($numero - 1)."</b><br>
                O seu sucessor é <b>". ($numero + 1)."</b>";
            }
        ?>
        <button type="submit" onclick="javascript:window.history.back()">Voltar</button>
    </main>
</body>
</html>
