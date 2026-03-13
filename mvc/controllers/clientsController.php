
<?php 

    require_once('./mvc/model/Client.php');

    class clientsController{
        private $model;

        function __construct()
        {
            $this->model = new ClientModel; 
        }
    }

?>