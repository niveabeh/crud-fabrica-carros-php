<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/crud-fabrica-carros-php/mvc/views/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="/crud-fabrica-carros-php/mvc/views/js/main.js" defer> </script>
    <title>Fabricar</title>
</head>

<body>
    <div class="container-pai">

        <div class="container-esquerdo">

            <div class="caixa-card">

                <?php if ($validador): ?>

                    <h3 style="color:green">Venda efetuada com sucesso</h3>

                    <p>Categoria: <?= $tipo ?></p>
                    <p>Modelo: <?= $modelo ?></p>
                    <p>Cor: <?= $cor ?></p>

                <?php else: ?>

                    <h3>Venda não realizada</h3>

                    <p>Não há veículo em estoque com essas informações.</p>

                <?php endif; ?>

                <a href="../View/index.html">Voltar</a>

            </div>

        </div>

    </div>
</body>

</html>