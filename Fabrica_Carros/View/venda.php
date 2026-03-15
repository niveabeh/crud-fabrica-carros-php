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

                <h3>Escolha o tipo de veículo</h3>

                <form method="POST" action="../Controllers/FabricaController.php">

                    <input type="hidden" name="acao" value="venda">

                    <button name="acaoDois" value="Motos" class="btn-primeiro">Motos</button>
                    <button name="acaoDois" value="Carros" class="btn-primeiro">Carros</button>

                </form>

                <?php if (isset($veiculos)): ?>

                    <h3><?= $tipo ?> disponíveis</h3>

                    <?php foreach ($veiculos as $v): ?>

                        <p><?= $v->getModelo() ?> - <?= $v->getCor() ?></p>

                    <?php endforeach; ?>

                <?php endif; ?>

            </div>

        </div>

    </div>
</body>

</html>