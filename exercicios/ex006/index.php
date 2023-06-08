<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['valor1'] ?? 0;
        $valor2 = $_GET['valor2'] ?? 0;
    ?>
    <main>
        <h1>Somador de valores</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor1">Valor 1</label>
            <input type="number" name="valor1" id="id-valor1" value="<?php echo $valor1 ?>">
            <label for="valor2">Valor 2</label>
            <input type="number" name="valor2" id="id-valor2" value="<?php echo $valor2 ?>">
            <input type="submit" value="Somar">
        </form>
    </main>

    <section id="resultado">
    <h2>Resultado da soma</h2>
    <?php 
        $soma = $valor1 + $valor2;
        echo "<p>A soma entre os valores $valor1 e $valor2 é igual a <strong>$soma</strong>.</p>"
    
    ?>
    </section>
</body>
</html>