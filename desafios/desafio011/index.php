<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 011 - Reajustar preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preco = $_REQUEST['preco'] ?? "0";
        $reajuste = $_REQUEST['reajuste'] ?? "0";
        $preco_reajustado = $preco + ($preco * ($reajuste / 100));
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Reajustador de preços</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <label for="preco">Preço do produto (R$)</label>
            <input type="number" name="preco" id="id-preco" min="0.10" step="0.01">
            <label for="reajuste">Qual será o percentual de reajuste? <strong id="porcentagem"></strong>%</label>
            <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" oninput="mudaValor()">
            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section>
        <h2>Valor do reajuste</h2>
        <?php 
            echo "<p>O produto que custava <strong>" . numfmt_format_currency($padrao, $preco, "BRL") . "</strong>, com <strong>$reajuste%</strong> de aumento, vai passar a custar <strong>" . numfmt_format_currency($padrao, $preco_reajustado, "BRL") . "</strong> a partir de agora.</p>"
        ?>

    </section>

    <script>
        mudaValor()
        function mudaValor() {
            porcentagem.innerText = reajuste.value;
        }
    </script>
</body>
</html>