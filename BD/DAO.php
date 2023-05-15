<?php
abstract class DAO 
{    
    protected $Conexao;

    public function__construct() {
    
    $this->$Conexao =MySQLDatabase::getInstance();

    }
}
