<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 008 - Raízes de um número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero = $_REQUEST['numero'] ?? 1;
        $raiz_quadrada = $numero ** (1/2);
        $raiz_cubica = $numero ** (1/3);              
    ?>

    <main>
        <h1>Informe um número</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <label for="numero">Número:</label>
            <input type="number" name="numero" id="id-numero">
            <input type="submit" value="Calcular">    
        </form>

        <section>
            <h2>Resultado final</h2>
            <?php 
                echo "Analisando o número <strong>$numero</strong>...";
                echo "<p>A raiz quadrada é <strong>" . number_format($raiz_quadrada, 3) . "</strong>.</p>";
                echo "<p>A raiz cúbica é <strong>" . number_format($raiz_cubica, 3) . "</strong>.</p>";          
            ?>
        </section>



    </main>
    
</body>
</html>