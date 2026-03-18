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
                    <h3 class="text-center text-secondary">Informe os dados dos veículos</h3>


                    <table class="table table-striped ">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Modelo</th>
                                <th>Cor</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <!-- Tem que fazer um select from e descobrir o tamanho da tabela -->
                        <tbody>

                            <?php
                             foreach ($resultData as $i): ?>

                                <tr>
                                    <td> <?php echo $i['id']  ?> </td>
                                    <td><?php echo $i['modelo']  ?> </td>
                                    <td><?php echo $i['cor']  ?> </td>
                                    <td><a href="index.php?a=atualizar&id=<?= $i['id'] ?>"  class="btn btn-sm btn-primary">Editar</a>
                                        <a href="index.php?a=deletar" class="btn btn-sm btn-outline-danger ">Excluir</a>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>


                </div>
                <p class="text-secondary mt-4"><small> Este programa faz parte da atividade final da disciplina de <span class="text-roxo fw-semibold">Programação Orientada a Objetos em PHP</span>. O projeto apresenta uma simulação dinâmica de uma fábrica de veículos, permitindo criar, listar, editar e excluir veículos</small></p>
                <div class="col-12 col-lg-6">
                </div>
            </div>
        </div>
    </div>
</body>

</html>