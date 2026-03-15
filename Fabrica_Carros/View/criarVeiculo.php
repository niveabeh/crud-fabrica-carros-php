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

            <div class="titulos">
                <h1 class="texto-h1">Fabricando <?= $tipo ?></h1>
            </div>

            <div class="caixa-card">

                <h3>Informe os dados dos veículos</h3>

                <form action="../Controllers/FabricaController.php" method="POST">

                    <input type="hidden" name="acao" value="salvarVeiculo">
                    <input type="hidden" name="qtdeFabricar" value="<?= $qtdeFabricar ?>">
                    <input type="hidden" name="tipo_veiculo" value="<?= $tipo ?>">

                    <?php for ($i = 1; $i <= $qtdeFabricar; $i++): ?>

                        <div class="bloco-veiculo">

                            <label>Modelo (<?= $i ?>)</label>
                            <input type="text" name="modelo_<?= $i ?>" required>

                            <label>Cor</label>
                            <input type="text" name="cor_<?= $i ?>" required>

                        </div>

                    <?php endfor; ?>

                    <div class="caixa-btn">

                        <button class="btn-primeiro">Confirmar</button>
                        <a href="../View/index.html" class="btn-segundo">Voltar</a>

                    </div>

                </form>

            </div>
        </div>
    </div>
</body>

</html>