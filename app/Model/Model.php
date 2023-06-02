<?php 
require_once("./config/database.php");

class Model
{
    protected $dbConnection;
    protected $table;
    protected $data;
    protected $sql;

    public function __construct()
    {
        $this->dbConnection = DatabaseConnection::getInstance();
    }


}