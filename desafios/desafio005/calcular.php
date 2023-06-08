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
        <h1>Analisador de número real</h1>
    </header>
    <main>
    <p>
        <?php 
        $numero = $_REQUEST['numero'] ?? 0;
        $numero_inteiro = (int) $numero;
        $numero_fracionario = $numero - $numero_inteiro;

        echo "<p>Analisando o número <strong>" . number_format($numero, 3, ",", ".") . "</strong> informado pelo usuário: </p>";
        echo "<ul><li>A parte inteira do número é <strong>" . number_format($numero_inteiro, 0, ",", ".") . "</strong>.</li><li>A parte fracionária do número é <strong>" . number_format($numero_fracionario, 3, ",", ".") ."</strong>.</li><ul>";
        ?>
    </p>
    <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>