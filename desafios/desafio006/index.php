<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 006 - Anatomia de uma divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_REQUEST['valor1'] ?? 0;
        $divisor = $_REQUEST['valor2'] ?? 1;  
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY); 
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="request">
            <label for="valor1">Dividendo:</label>
            <input type="number" name="valor1" id="id-valor1" min="0">
            <label for="valor2">Divisor:</label>
            <input type="number" name="valor2" id="id-valor2" min="1">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section id="resultado">
        <h2>Estrutura da divisão:</h2>
        <?php 
            $resultado = (int) ($dividendo / $divisor);
            $resto_divisao = $dividendo % $divisor;
            echo "<p>Dividendo: $dividendo</p>
                  <p>Divisor: $divisor</p>
                  <p>Quociente: $resultado</p>
                  <p>Resto da divisão: $resto_divisao</p>"        
        ?>

        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto_divisao?></td>
                <td><?=$resultado?></td>
            </tr>


        </table>
    </section>
</body>
</html>

