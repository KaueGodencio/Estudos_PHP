<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio de PHP</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>

    <h1>Resultado Final</h1>

        <?php
        $numero = $_REQUEST["num"] ?? 0;
        $ant = $numero - 1;
        $suc = $numero + 1;
     
        echo "O número escolhido foi <b> $numero </b></br>";
        echo "O antecessor é  $ant  <br>";
        echo "O sucessor é   $suc <br> ";
        ?>

        <div >
            <button>   <a href="javascript:history.go(-1)" style="color:white;"> Voltar</a></button>
        </div>
    </main>
</body>

</html>