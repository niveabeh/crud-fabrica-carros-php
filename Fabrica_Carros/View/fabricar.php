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

            <div class="fotos-integrantes">
                <img src="../assets/img/emilly.png" class="fotos-inte">
                <img src="../assets/img/nivea.jpg" class="fotos-inte">
                <img src="../assets/img/ana.png" class="fotos-inte">
            </div>

            <div class="titulos">
                <h2 class="subtitulo-principal">monte o seu veículo</h2>
                <h1 class="texto-h1">Fábrica de Veículos</h1>
            </div>

            <div class="caixa-card">
                <h3>Fabricar Veículo</h3>

                <form action="../Controllers/FabricaController.php" method="POST" class="form-menu">

                    <input type="hidden" name="acao" value="criandoVeiculo">

                    <div class="form-inputs-venda">

                        <label>Quantidade de veículos a serem fabricados:</label>
                        <input type="number" min="1" name="qtdeFabricar" required>

                        <label>Escolha um veículo:</label>
                        <select name="tipo_veiculo" required>
                            <option value="Motos">Moto</option>
                            <option value="Carros">Carro</option>
                        </select>

                    </div>

                    <div class="caixa-btn">
                        <button type="submit" class="btn-primeiro">Confirmar</button>
                        <a href="../View/index.html" class="btn-segundo">Voltar ao menu</a>
                    </div>

                </form>
            </div>

        </div>

        <div class="container-direito"></div>

    </div>
</body>

</html>