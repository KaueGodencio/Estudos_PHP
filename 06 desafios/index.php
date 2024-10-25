<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>

        <?php

        /* segunte exercicio exibi na tela o numero antecessor e o sucessor  */

        /* Minha solução foi criar 3 variaveis uma contem o numero e as outras duas contem o recebe o valor do numero e logo apos recebe o -1 ou +1 e no echo retorna o valor  */


        // $num = 15;
        //$ant = $num - 1;
        //$suc = $num + 1;
        //echo "O antecessor de $num é $ant   <br>";
        //echo "O sucessor de $num é $suc ";


        $num = 15;
        // $ant = $num - 1;
        // $suc = $num + 1; */
        echo "O antecessor de $num é " . ($num - 1) . "  <br>";
        echo "O sucessor de $num é  " . ($num + 1) . " ";






        ?>



    </main>
</body>

</html>