<?php

   require_once __DIR__ . '/Controllers/FabricaController.php';

   $controller = new FabricaController();

   $action = $_GET['a'] ?? 'home';
  $rotasPermitidas = ['home','listarTodos','fabricar','salvar','editar','atualizar','deletar'];

   if (in_array($action, $rotasPermitidas)) {
      $controller->$action();
   } else {
      $controller->home();
   }
?>