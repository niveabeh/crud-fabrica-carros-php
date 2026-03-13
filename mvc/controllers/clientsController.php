
<?php 

    require_once __DIR__ .'/../model/Client.php';

    class ClientsController{
        private $model;

        function __construct()
        {
            $this->model = new ClientModel(); 
        }
        function getAll(){
            $resultData = $this->model->getAll(); 
            require_once __DIR__ . '/../views/index.php';
        }
    }

?>