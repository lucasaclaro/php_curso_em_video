<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <p>
        <?php 
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
    
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    
        $dados = json_decode(file_get_contents($url), true);
    
        //var_dump($dados);
    
        $cotacao = $dados["value"][0]["cotacaoCompra"];

        $valor = $_REQUEST['numero'];

        $valor_atual = $valor / $cotacao;

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "Seus <strong>" . numfmt_format_currency($padrao, $valor, "BRL") . "</strong> equivalem a <strong>" . numfmt_format_currency($padrao, $valor_atual, "USD") . "</strong>.";
        echo "*Cotação atual do dólar em $inicio: ". numfmt_format_currency($padrao, $cotacao, "USD") . ".";  
    
    ?>
        </p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>

</body>
</html>