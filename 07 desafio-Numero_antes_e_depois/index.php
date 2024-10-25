<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Interação com Formulários -  Desafio PHP</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <header>
            <h1>Informe um número</h1>
        </header>
        <section>
            <form action="resposta.php" method="GET">
                <label for="numero" > Número</label>
                <input type="number" name="num" id="idnul" required>              
                <input type="submit" value="Calcular">
            </form>
        </section>
    </body>
</html>
