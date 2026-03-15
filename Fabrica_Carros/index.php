<?php

   require_once __DIR__ . '/../controllers/clientsController.php';

   $controller = new ClientsController();

   $action = $_GET['a'] ?? 'getAll';

   $rotasPermitidas = ['getAll','create','edit','delete'];

   if (in_array($action, $rotasPermitidas)) {
      $controller->$action();
   } else {
      $controller->getAll();
   }
?>