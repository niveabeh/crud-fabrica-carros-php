<!-- Consultas/Regras de negócios -->

<?php


require_once __DIR__ . '/../configuration/connect.php';

class ClientModel extends Connect
{
    private $table;
    function __construct()
    {
        parent::__construct();
        $this->table = 'veiculos';
    }
    function getAll()
    {
        $sqlSelect = $this->connection->query("SELECT * FROM $this->table");
        $resultQuery = $sqlSelect->fetchAll();
        return $resultQuery;
    }
    function insert($modelo, $cor)
    {
            $sql = "INSERT INTO $this->table (modelo, cor) 
                VALUES (:modelo, :cor)";
            $stmt = $this->connection->prepare($sql);
            $stmt->bindParam(':modelo', $modelo);
            $stmt->bindParam(':cor', $cor);
            $stmt->execute();
            return true;
    }
    function update($id, $modelo, $cor)
    {
            $sql = "UPDATE $this->table 
                SET modelo = :modelo, 
                    cor = :cor 
                WHERE id = :id";
            $stmt = $this->connection->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':modelo', $modelo);
            $stmt->bindParam(':cor', $cor);
            $stmt->execute();
            return true;
    }
    function delete($id)
    {
            $sql = "DELETE FROM $this->table WHERE id = :id";
            $stmt = $this->connection->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;

    }
}

?>