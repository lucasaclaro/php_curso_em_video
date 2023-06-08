<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulando um caixa eletrônico</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $saque = $_REQUEST['saque'] ?? 1;
        $saldo = $saque;

        $nota_100 = (int) ($saldo / 100);
        $saldo = ($saldo % 100);

        $nota_50 = (int) ($saldo / 50);
        $saldo = ($saldo % 50);

        $nota_10 = (int) ($saldo / 10);
        $saldo = ($saldo % 10);

        $nota_5 = (int) ($saldo / 5);
    ?>

    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>">
            <label for="saque">Qual o valor que você deseja sacar? (R$)</label>
            <input type="number" name="saque" id="id-saque" step="5" min="5" require>
            <h6>*Notas disponíveis: R$100, R$50, R$10 e R$5.</h6>
            <input type="submit" value="Sacar">
        </form>

        <?php 
            echo "<h3>Saque de <strong>" . numfmt_format_currency($padrao, $saque, "BRL") . "</strong> realizado.</h3>";
            echo "<p>O caixa eletrônico vai te entregar as seguintes notas:</p>";
            echo "<ul>
                    <li><img src='imagens/100-reais.jpg' alt='Nota de 100' class='nota'> x $nota_100</li>
                    <li><img src='imagens/50-reais.jpg' alt='Nota de 50' class='nota'>  x $nota_50</li>
                    <li><img src='imagens/10-reais.jpg' alt='Nota de 10' class='nota'>  x $nota_10</li>
                    <li><img src='imagens/5-reais.jpg' alt='Nota de 5' class='nota'>  x $nota_5</li>         
                </ul>";
        ?>


    </main>
</body>
</html>