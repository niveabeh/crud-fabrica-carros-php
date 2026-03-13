<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/crud-fabrica-carros-php/mvc/views/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="/crud-fabrica-carros-php/mvc/views/js/main.js" defer> </script>
    <title>Document</title>
</head>

<body>
    <h1 class="h1 text-center">Veículos</h1>
    <div class="container d-flex align-items-center justify-content-center mb-4">
        <fieldset class="h4 text-center text-primary"> Adicionar Veículos
            <form method="POST" action="index.php?a=create" class="d-flex gap-2">
    
                <input type="text"  class="form-control" name="modelo" placeholder="Modelo" required>
    
                <input type="text"  class="form-control" name="cor" placeholder="Cor" required>
    
                <button class="btn btn-primary" type="submit">Salvar</button>
    
            </form>
        </fieldset>
    </div>
    <div class="content">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th  scope="col">ID</th>
                    <th  scope="col">Modelo</th>
                    <th  scope="col">Cor</th>
                    <th  scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php

                foreach ($resultData as $data): ?>
                    <tr>
                        <td><?= $data['id'] ?></td>
                        <td><?= $data['modelo'] ?></td>
                        <td><?= $data['cor'] ?></td>
                        <td>
                            <button
                                class="btn btn-warning btn-sm"
                                data-bs-toggle="modal"
                                data-bs-target="#editModal"
                                onclick="fillModal(
                                '<?= $data['id'] ?>',
                                    '<?= $data['modelo'] ?>',
                                    '<?= $data['cor'] ?>'
                                )">
                                Editar
                            </button>
                            <button
                                class="btn btn-danger btn-sm"
                                data-bs-toggle="modal"
                                data-bs-target="#deleteModal"
                                onclick="setDeleteId('<?= $data['id'] ?>')">
                                Excluir
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="editModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="index.php?a=edit">
                    <div class="modal-header">
                        <h5 class="modal-title">Editar Veículo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="edit-id">
                        <div class="mb-3">
                            <label>Modelo</label>
                            <input type="text" name="modelo" id="edit-modelo" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Cor</label>
                            <input type="text" name="cor" id="edit-cor" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="index.php?a=delete">
                    <div class="modal-header">
                        <h5 class="modal-title">Confirmar Exclusão</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p>Tem certeza que deseja excluir este veículo?</p>
                        <input type="hidden" name="id" id="delete-id">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Cancelar
                        </button>
                        <button type="submit" class="btn btn-danger">
                            Excluir
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>