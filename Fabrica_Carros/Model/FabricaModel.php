<?php

require_once __DIR__ . '/../Model/Connect.php';

class FabricaModel extends Connect
{
    private $table = "veiculos";


    //meu delete
    public function deletarVeiculo($id)
    {
        $sql = "DELETE FROM {$this->table} WHERE id = ?";
        $consulta = $this->connection->prepare($sql);
        return $consulta->execute([$id]);
    }

    //meu create
    public function fabricarVeiculos($modelo, $cor)
    {
        $sql = "INSERT INTO {$this->table} (modelo, cor) VALUES (?, ?)";
        $consulta = $this->connection->prepare($sql);
        return $consulta->execute([$modelo,$cor]);
    }

    //meu sql para exibir todos os dados
    public function listar()
    {
        $sql = "SELECT * FROM {$this->table}";
        $consulta = $this->connection->prepare($sql);
        $consulta->execute();

        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    //para editar algum veículo
    public function editarVeiculo($id, $modelo, $cor)
    {
        $sql = "UPDATE {$this->table} SET modelo = ?, cor = ? WHERE id = ?";
        $consulta = $this->connection->prepare($sql);
        return $consulta->execute([$modelo, $cor, $id]);
    }


    //buscar
    public function buscarPorId($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = ?";
        $consulta = $this->connection->prepare($sql);
        $consulta->execute([$id]);
        return $consulta->fetch(PDO::FETCH_ASSOC);
    }
}
