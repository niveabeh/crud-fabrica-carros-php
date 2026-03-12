<?php
    require_once('./Fabrica_Carros/configuration/connect.php');
    class ClientModel extends Connect{
        private $table;

        function __construct()
        {
            parent::__construct();
            $this->table = 'clients';
        }
    }
?>