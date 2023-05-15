<?php
class MySQLDatabese
{
        private $conexao;
        private $Username = "root";
        private $Host = "localhost";
        private $Password = "";
        private $BancoDeDados = "versati1_projeto";
    
        public function __construct()
        {
        try {
            $this->conexao = new PDD ("mysql:host={$this->Host};dbname={$this->BancoDeDados}",$this->Username, $this->Password);
        } catch (PDOException $e) {
            die ("ERRO:" . $e->getMessage());
        }
        }
        public function getConexao ()
        {
            return $this->conexao;
        }
        public static function getInstance() 
        {
            $mysqlConnect = new MySQLDatabase;
            return $mysqlConnect->getConexao();

        }
}
echo "Banco conectado com sucesso!";