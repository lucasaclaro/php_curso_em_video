<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 009 - Entendendo as médias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_REQUEST['valor1'] ?? 0;
        $peso1 = $_REQUEST['peso1'] ?? 1;
        $valor2 = $_REQUEST['valor2'] ?? 0;
        $peso2 = $_REQUEST['peso2'] ?? 1;
        $media_aritmetica = ($valor1 + $valor2) / 2;
        $media_ponderada = (($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2)    
    ?>

    <main>
        <h1>Médias aritméticas</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <label for="valor1">1ª nota:</label>
        <input type="number" name="valor1" id="id-valor1" require>
        <label for="peso1">Peso da 1ª nota:</label>    
        <input type="number" name="peso1" id="id-peso1" min="1">
        <label for="valor2">2ª nota:</label>
        <input type="number" name="valor2" id="id-valor2" require>
        <label for="peso2">Peso da 2ª nota:</label>
        <input type="number" name="peso2" id="id-peso2" min="1">
        <input type="submit" value="Calcular">    
        </form>
    </main>

    <section>
        <h2>Cálculo das médias</h2>
        <?php 
            echo "<p>A <strong>média aritmética simples</strong> entre <strong>$valor1</strong> e <strong>$valor2</strong> é <strong>" . number_format($media_aritmetica, 2, ",", ".") ."</strong>.</p>";
            echo "<p>A <strong>média aritmética ponderada</strong> com pesos <strong>$peso1</strong> e <strong>$peso2</strong> é <strong>" . number_format($media_ponderada, 2, ",", ".") . "</strong>.</p>";
        ?>


    </section>

</body>
</html>