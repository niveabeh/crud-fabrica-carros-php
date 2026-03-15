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

            <h3>Veículos fabricados</h3>

            <form method="POST">

                <button name="acaoInfo" value="Motos">Motos</button>
                <button name="acaoInfo" value="Carros">Carros</button>
                <button name="acaoInfo" value="infoGeral">Em estoque</button>

            </form>

            <?php foreach ($veiculos as $v): ?>

                <p><?= $v->getModelo() ?> - <?= $v->getCor() ?></p>

            <?php endforeach; ?>

        </div>

    </div>
</body>

</html>