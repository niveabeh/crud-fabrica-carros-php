<?php

require_once __DIR__ . '/../models/FabricaModel.php';

class FabricaController
{
    private $model;

    function __construct()
    {
        $this->model = new FabricaModel();
    }

    public function getAll()
    {
        $veiculos = $this->model->getVeiculos();
        require_once __DIR__ . '/../views/index.php';
    }

    public function fabricar()
    {
        $tipo = $_POST['tipo'] ?? null;
        $modelo = $_POST['modelo'] ?? null;
        $cor = $_POST['cor'] ?? null;

        if ($tipo && $modelo && $cor) {
            $this->model->fabricarVeiculos($tipo, $modelo, $cor);
        }

        header("Location: index.php?a=getAll");
        exit;
    }

    public function vender()
    {
        $modelo = $_POST['modelo'] ?? null;
        $cor = $_POST['cor'] ?? null;
        $tipo = $_POST['tipo'] ?? null;

        if ($modelo && $cor && $tipo) {
            $this->model->venderVeiculos($modelo, $cor, $tipo);
        }

        header("Location: index.php?a=getAll");
        exit;
    }

    public function listarTipo()
    {
        $tipo = $_GET['tipo'] ?? null;

        if ($tipo) {
            $veiculos = $this->model->getTipoVeiculos($tipo);
        } else {
            $veiculos = [];
        }

        require_once __DIR__ . '/../views/listaTipo.php';
    }

    public function delete()
    {
        $id = $_POST['id'] ?? null;

        if ($id) {
            $this->model->delete($id);
        }

        header("Location: index.php?a=getAll");
        exit;
    }
}