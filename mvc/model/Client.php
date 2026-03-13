<!-- Consultas/Regras de negócios -->

<?php 


    require_once('./mvc/configuration/connect.php');

    class ClientModel extends Connect{

         private $table;

        function __construct()
        {
            parent::__construct(); 
            $this->table = 'veiculos';
        }
    }

?>