<!-- Rotas / Chamada de Metódos -->
 <?php
    require_once __DIR__ . '/../mvc/controllers/clientsController.php';
    
    $controller = new clientsController(); 
    
    $action = !empty($_GET['a']) ? $_GET['a'] : 'getAll'; //um if if Else


    $controller->$action();
 ?>