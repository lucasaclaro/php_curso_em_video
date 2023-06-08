<!DOCTYPE html>
<html lang="en">
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
    <main>
        <p>
            <?php 
                $valor = $_REQUEST["numero"] ?? 0;
                $valor_convertido = $valor / 5;
                //echo "Seus <strong>R$" . number_format($valor, 2, ",", ".") . "</strong> equivalem a <strong>US$" . number_format($valor_convertido, 2, ",", ".") . "</strong>.";               
                //outra forma de realizar o exercício (nem sempre funciona em alguns servidores locais. Para utilizá-la é necessário habilitar a opção):
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
                echo "Seus <strong>" . numfmt_format_currency($padrao, $valor, "BRL") . "</strong> equivalem a <strong>" . numfmt_format_currency($padrao, $valor_convertido, "USD") . "</strong>."
            ?>    
        </p>
        <h4>*Cotação fixa do dólar em 5 reais.</h4>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
    </header>

</body>
</html>