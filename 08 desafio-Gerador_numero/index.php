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
        <h1> Trabalhando com números aleatórios</h1>
        <?php

        // Função  rand() = 1951 - Linear Congretial Gerator
        // Função mt_rand() = 1997 - Mersenne Twister - Mais utilizado
        // Função Apartir do PHP 7.1, rand() é um simples apontanemtno para mt_rand()
        // Função random_int() gera números aleatórios criptograficamente seguros - Porém é mais demorado e so deve ser utilizado quano realmente precisa 
        
        $min = 0;
        $max = 100;
        $numeroAleatorio = mt_rand($min, $max);
        echo "<p> Gerando número aleatório entre $min e $max... <br> O valor gerado foi <b>$numeroAleatorio</b> </p>"

        ?>

        <div>
            <!--  <button id="btn_gerar" onclick="javascript:document.location.reload()"> Gerar Número</button> -->
            <button id="btn_gerar"> Gerar Número</button>
        </div>

        <script>
            // Pega o elemento do botão pelo id
            const btnGerar = document.getElementById('btn_gerar');

            // Adiciona um evento de clique ao botão
            btnGerar.addEventListener('click', function() {
                // Recarrega a página
                location.reload();
            });
        </script>


    </main>
</body>

</html>