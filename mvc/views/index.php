<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Veículos</h1>
    <div class="content">
        <table class="table">
            <thead>
                <tr>ID</tr>
                <tr>Modelo</tr>
                <tr>Cor</tr>
            </thead>
            <tbody>
                <?php
                foreach($resultData as $data): ?>
                    <tr>
                    <td><?=  $data['id'] ?></td>
                    <td><?=  $data['modelo'] ?></td>
                    <td><?=  $data['cor'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>