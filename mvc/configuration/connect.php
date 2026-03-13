<!-- Conexão com o banco de dados -->

<?php
    define('HOST', 'localhost');
    define('DATABASENAME', 'crud_fabrica_carros_php');
    define('USER', 'root');
    define('PASSWORD', ''); //Não tem senha

    class Connect{
        
        protected $connection;

        function __construct()
        {
            $this->connectDatabase();
        }
        function connectDatabase(){
            try{
                $this->connection = new PDO('mysql:host='.HOST.';dbname='.DATABASENAME, USER, PASSWORD);
            }catch(PDOException $e){
                echo "Erro na conexão: " . $e->getMessage();
                die();
            }
        }
    }

?>