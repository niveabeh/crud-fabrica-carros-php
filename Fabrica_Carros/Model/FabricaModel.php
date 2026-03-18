<?php

require_once __DIR__ . '/../Model/Connect.php';

class FabricaModel extends Connect
{
    private $table = "veiculos";



    //meu delete
    public function deletarVeiculo($id)
    {
        $sql = "DELETE FROM {$this->table} WHERE id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    //meu create
    public function fabricarVeiculos($modelo, $cor)
    {
        $sql = "INSERT INTO veiculos (modelo, cor)
            VALUES (:modelo, :cor)";

        $stmt = $this->connection->prepare($sql);

        return $stmt->execute([
            ':modelo' => $modelo,
            ':cor'    => $cor
        ]);
    }

    //meu sql para exibir todos os dados
    public function listar()
    {
        $sql = "SELECT * FROM {$this->table}";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //para editar algum veículo
    public function editarVeiculo($id, $modelo, $cor)
    {
        $sql = "UPDATE $this->table
                SET modelo = :modelo, cor = :cor 
                WHERE id = :id";

        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':modelo', $modelo);
        $stmt->bindParam(':cor', $cor);

        return $stmt->execute();
    }


    //buscar
    public function buscarPorId($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = :id LIMIT 1";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
