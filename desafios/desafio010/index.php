<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Desafio 010 - Máquina do tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $ano_atual = date("Y");
        $ano_nascimento = $_REQUEST['ano_nascimento'] ?? '2000';
        $ano_escolhido = $_REQUEST['ano_escolhido'] ?? $ano_atual;
        $resultado = $ano_escolhido - $ano_nascimento;

    ?>

    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <label for="ano_nascimento">Em que ano você nasceu?</label>
            <input type="number" name="ano_nascimento" id="id-ano_nascimento" min="1900" max="<?=$ano_atual?>" value="<?=$ano_nascimento?>">
            <label for="ano_escolhido">Quer saber a sua idade em qual ano? (atualmente estamos em <strong><?=$ano_atual?></strong>)</label>
            <input type="number" name="ano_escolhido" id="id-ano_escolhido" min="1900" value="<?=$ano_atual?>">
            <input type="submit" value="Qual será a minha idade?"> 
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
            echo "<p>Quem nasceu em <strong>$ano_nascimento</strong> vai ter <strong>$resultado</strong> anos em <strong>$ano_escolhido</strong>!</p>";
        ?>
    </section>
</body>
</html>