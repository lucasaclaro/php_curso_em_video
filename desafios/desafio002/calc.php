<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 002 - Sorteador de números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>    
    <header>
        <h1>Resultado:</h1>
        <main>
        <p>
            <?php
            $numero_sorteado = mt_rand(0, 100); 
            // a função rand() também pode ser usada, porém ela é 4x mais lenta
            // random_int() gera números aleatórtios criptograficamente seguros
            echo "O valor sorteado foi <strong>$numero_sorteado</strong>."
            ?>
        </p>
        <button onclick="javascript:document.location.reload()">&#x1F504;Sortear novamente</button>
        <button onclick="javascript:history.go(-1)">Voltar</button>
        </main>

    </header>

</body>
</html>


