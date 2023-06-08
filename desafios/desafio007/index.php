<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 007 - Salário mínimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salario = $_REQUEST['salario'] ?? 0;
        $salario_minimo = 1380;   
        $divisao = (int) ($salario / $salario_minimo);
        $modulo = $salario % $salario_minimo;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    ?>

    <main>
        <h1>Informe seu salário</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="request">
            <label for="salario">Salário (R$):</label>
            <input type="number" name="salario" id="id-salario">
            <h2>Considerando o salário mínimo de <strong>R$ 1380,00</strong></h2>
            <input type="submit" value="Calcular">     
        </form>

    <section id="resultado">
        <h2>Resultado final</h2>
        <?php 
            echo "Quem recebe R$ " . numfmt_format_currency($padrao, $salario, "BRL") . " ganha <strong>" . numfmt_format_currency($padrao, $divisao, "BRL") . " salários mínimos</strong> + " . "R$ " . numfmt_format_currency($padrao, $modulo, "BRL") . "."        
        ?>


    </section>





    </main>
</body>
</html>