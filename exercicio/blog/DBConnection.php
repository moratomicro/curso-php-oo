<?php

declare(strict_types=1);

class DBConnection 
{
    /**
     * @var PDO
     */
    private $_dbHostName = "localhost";
    private $_bdName = "blog";
    private $_dbUserName = "root";
    private $_dbPassword = "";
    private $_con;

    public function __construct()
    {
        try {
            $this->_con = new PDO("mysql:host=$this->_dbHostName; dbname=$this->_dbName", $this->_dbUserName, $this->_dbPassword);
            $this->_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "conectado com sucesso.";
        } catch(PDOException $e) {
            echo "<h1>Ops, algo deu errado: " . $e->getMessage()."</h1>";
            echo "<pre>";
            echo print_r($e);
        }
    }

    // return Connection
    public function returnConnection() {
        return $this->_con;
    }
}

?>