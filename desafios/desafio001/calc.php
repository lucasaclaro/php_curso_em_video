<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado:</h1>
        <main>
            <p>
                <?php 
                $numero = (int)$_REQUEST["numero"] ?? 0;
                $antecessor = $numero - 1;
                $sucessor = $numero + 1; 
                echo "Você digitou o número <strong>$numero</strong>! O seu antecessor é <strong>$antecessor</strong> e o sucessor é <strong>$sucessor</strong>."
            ?>
            </p>
            <button onclick="javascript:history.go(-1)">Voltar</button>
        </main>
    </header>
</body>
</html>
