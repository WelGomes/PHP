<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resposta</title>
</head>
<body>
    <main>
        <h1>Conversor de Moedas Avançado</h1>
        <?php
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%2705-23-2023%27&@dataFinalCotacao=%2705-30-2023%27&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url), true);
           
            $cotacao = $dados['value'][0]['cotacaoCompra'];
    
            $real = $_POST['real'];

            if($real == '' || $real < 0){
                echo "<script>alert('ERRO! Insira um valor valido');</script>";
                header("Refresh: 0 ; index.php");
            } else {
                $dolar = $real / $cotacao;
                echo "<p>Seus <b>R$: ". number_format($real, 2, ',', '.')."</b> equivalem a <b>". number_format($dolar, 2, ',', '.')."</b></p>
                Cotação obtida diretamente do site do <b>Banco Central do Brasil</b>";
            }
        ?>
        <a href="javascript:window.history.back()"><button type="submit">Voltar</button></a>
    </main>
</body>
</html>