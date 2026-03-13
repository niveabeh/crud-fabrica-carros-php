<!-- Consultas/Regras de negócios -->

<?php 


    require_once __DIR__ . '/../configuration/connect.php';

    class ClientModel extends Connect{

         private $table;

        function __construct()
        {
            parent::__construct(); 
            $this->table = 'veiculos';
        }
        function getAll(){
            $sqlSelect =$this->connection->query("SELECT * FROM $this->table");
            $resultQuery = $sqlSelect->fetchAll();
            return $resultQuery;
        }
    }

?>