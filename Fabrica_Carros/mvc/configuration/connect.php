<!-- Conexão com o banco de dados -->

<?php 
    
    // Definir constantes
    define('HOST', 'localhost');
    define('DATABASENAME', 'crud-fabrica-carros-php');
    define('USER', 'root');
    define('PASSWORD','root');
    

    class Connect{
        protected $connection;

        function __construct()
        {
            $this->connectDatabase();
        }
        function connectDatabase(){
            try{
                $this->connection = new PDO('mysq:dbname='.HOST.'dbname='.DATABASENAME,USER,PASSWORD);
            }
            catch(PDOException $e){
                echo "Error!".$e->getMessage();
            }
        }
    }
    $testeConnection = new Connect(); 
    
?>