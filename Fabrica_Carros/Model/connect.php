<?php
//funcao para criar constantes: valor e chave
    define('HOST', 'localhost');
    define('DATABASENAME', 'crud_fabrica_carros_php');
    define('USER', 'root');
    define('PASSWORD', ''); 

    class Connect{

        protected $connection;

        function __construct()
        {
            $this->connectDatabase();
        }

        function connectDatabase(){
        
            try{
                //funcao PDO nativa do php para conxao ao banco de dados: qual o banco: onde ele está, e nome banco do meu projeto;user;senha
                $this->connection = new PDO('mysql:host='.HOST.';dbname='.DATABASENAME, USER, PASSWORD);

            }catch(PDOException $e){
                echo "Erro na conexão: " . $e->getMessage();
                //evita o sistema continuar rodando
                die();
            }
        }
    }

?>