<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 012 - Calculadora de tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $tempo = $_REQUEST['tempo'] ?? 1;
        $semana = (int) ($tempo / 604800);
        $saldo_semana = $tempo % 604800;
        $dia = (int) ($saldo_semana / 86400);
        $saldo_dia = $saldo_semana % 86400;
        $hora = (int) ($saldo_dia / 3600);
        $saldo_hora = $saldo_dia % 3600;
        $minuto = (int) ($saldo_hora / 60);
        $segundo = $saldo_hora % 60;           
    ?>

    <main>
        <h1>Calculadora de tempo</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>">
            <label for="tempo">Qual é o total de segundos:</label>
            <input type="number" name="tempo" id="id-tempo" min="1">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Totalizando tudo</h2>
        <?php 
            echo "<p>Analisando o valor que você digitou, <strong>$tempo segundo(s)</strong> equivalem a um total de:</p>";
            echo "<ul>
                    <li>$semana semana(s)</li>
                    <li>$dia dia(s)</li>
                    <li>$hora hora(s)</li>
                    <li>$minuto minuto(s)</li>
                    <li>$segundo segundo(s)</li>          
                </ul>";
        ?>

    </section>



</body>
</html>