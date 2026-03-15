
<?php

require_once __DIR__ . '/../model/Client.php';

class ClientsController
{
    private $model;

    function __construct()
    {
        $this->model = new ClientModel();
    }
    function getAll()
    {
        $resultData = $this->model->getAll();
        require_once __DIR__ . '/../views/index.php';
    }
    function create()
    {
        $modelo = $_POST['modelo'];
        $cor = $_POST['cor'];
        $this->model->insert($modelo, $cor);
        header("Location: index.php?a=getAll");
    }
    function edit()
    {
        $id = $_POST['id'];
        $modelo = $_POST['modelo'];
        $cor = $_POST['cor'];
        $this->model->update($id, $modelo, $cor);
        header("Location: index.php?a=getAll");
    }
    function delete()
    {
        $id = $_POST['id'];
        $this->model->delete($id);
        header("Location: index.php?a=getAll");
    }
}

?>