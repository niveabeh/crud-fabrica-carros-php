<?php

//estou pegando as funções que tem no fabricamodel
require_once __DIR__ . '/../Model/FabricaModel.php';

class FabricaController
{
    private $model;

    public function __construct()
    {
        $this->model = new FabricaModel();
    }

    //rota para a minha home
    public function home()
    {
        require_once __DIR__ . '/../Views/home.php';
    }


    //Rota para a minha página de listagem
    public function listarTodos()
    {
        $resultData = $this->model->listar();
        require_once __DIR__ . '/../Views/info.php';
    }


    //Rota para meu Edite
    public function editar()
    {
        $id = $_GET['id'] ?? null;

        if ($id) {
            $veiculo = $this->model->buscarPorId($id);
            require_once __DIR__ . '/../Views/editar.php';
        }
    }
    public function atualizar()
    {
        $id     = $_POST['id'] ?? null;
        $modelo = $_POST['modelo'] ?? null;
        $cor    = $_POST['cor'] ?? null;

        if ($id && $modelo && $cor) {
            $this->model->editarVeiculo($id, $modelo, $cor);
        }

        header("Location: index.php?a=listarTodos");
        exit;
    }

    //Rota apenas para ir para a página fabricar
    public function fabricar()
    {
        require_once __DIR__ . '/../Views/fabricar.php';
    }

    //Rota para a mensagem de sucesso 
    public function msucesso(){
        require_once __DIR__ .'/../Views/msucesso.php';
    }
    //Rota para meu Create
    public function fabricando()
    {
        $modelo = $_POST['modelo'] ?? null;
        $cor    = $_POST['cor'] ?? null;

        if ($modelo && $cor) {
            $this->model->fabricarVeiculos($modelo, $cor);
        }
        header("Location: index.php?a=msucesso");
        exit;
    }

    //rotap para Delete 
    public function deletar()
    {
        $id = $_POST['id'] ?? null;

        if ($id) {
            $this->model->deletarVeiculo($id);
        }

        header("Location: index.php?a=listarTodos");
        exit;
    }
}
