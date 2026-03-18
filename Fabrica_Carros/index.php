<?php

   require_once __DIR__ . '/Controllers/FabricaController.php';

   $controller = new FabricaController();

   $acao = $_GET['a'] ?? 'home';
   $rotasPermitidas = ['home','listarTodos','fabricar','atualizar', 'atualizando','deletar', 'fabricando', 'msucesso'];

   if (in_array($acao, $rotasPermitidas)) {
      $controller->$acao();
   } else {
      $controller->home();
   }
?>