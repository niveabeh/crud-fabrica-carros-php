<?php
/** @var array $veiculo */
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/crud-fabrica-carros-php/Fabrica_Carros/Views/assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous" defer></script>
    <title>Home</title>
</head>

<body>
    <div class="container">
        <div class="row min-vh-100 d-flex  align-items-center justify-content-start">
            <div class="col-12 col-lg-6">
                <!-- fotos -->
                <div class="container mb-4">
                    <div class="row">
                        <div class="col-2 d-flex gap-2">
                            <img src="/crud-fabrica-carros-php/Fabrica_Carros/Views/assets/img/nivea.jpg" class="img-fluid w-75 rounded-circle shadow border border-white " alt="Imagem perfil Nívea">
                            <img src="/crud-fabrica-carros-php/Fabrica_Carros/Views/assets/img/emilly.png" class="img-fluid w-75 rounded-circle shadow border border-white " alt="Imagem perfil Nívea">
                        </div>
                    </div>
                </div>
                <div class="mb-2">
                    <h2 class="h2 text-secondary">Home</h2>
                    <h1 class="text-roxo h1 fw-bold  ">Fábrica de Veículos</h1>
                </div>
                <div class="rounded-4 shadow bg-light p-4 mt-4 ">
                    <h3 class="text-center text-secondary">Atualize os Dados do Veículo</h3>


                    <form action="index.php?a=atualizando" method="POST" class="p-3">
                        <div class="row g-3">
                            <input type="hidden" name="id" value="<?php echo $veiculo['id'] ?>">
                            
                            <div class="col-12">
                                <label for="modelo" class="form-label">Modelo</label>
                                <input type="text" name="modelo" id="modelo" value="<?php echo $veiculo['modelo'] ?>"
                                    class="form-control"
                                    required>
                            </div>
                            <div class="col-12">
                                <label for="cor" class="form-label">Cor</label>
                                <input type="text" name="cor" id="cor"  value="<?php echo $veiculo['cor'] ?>"
                                    class="form-control"
                                    required>
                            </div>
                        </div>
                        <div class="d-flex gap-2 mt-3 d-flex flex-column">
                            <button type="submit" class="btn btn-primeiro">
                                Confirmar
                            </button>
                            <a href="index.php?a=listarTodos" class="btn btn-outline-primeiro">
                                Voltar
                            </a>
                        </div>
                    </form>



                </div>
                <p class="text-secondary mt-4"><small> Este programa faz parte da atividade final da disciplina de <span class="text-roxo fw-semibold">Programação Orientada a Objetos em PHP</span>. O projeto apresenta uma simulação dinâmica de uma fábrica de veículos, permitindo criar, listar, editar e excluir veículos</small></p>
                <div class="col-12 col-lg-6">
                </div>
            </div>
        </div>
    </div>
</body>

</html>