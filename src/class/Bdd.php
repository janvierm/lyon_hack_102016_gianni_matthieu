<?php

namespace mjgn;


/**
 * Class Bdd
 * @package mjgn
 */
class Bdd
{
    /**
     * @var array
     */
    private $dbConfig;
    /**
     * @var \mysqli
     */
    private $dbConnection;
    /**
     * @var \mysqli_result
     */
    private $result;

    /**
     * Bdd constructor.
     * Collect database's connection data and store it in $this->dbConfig
     * Initiate the connection
     */
    public function __construct(){
        $this->dbConfig = require(__DIR__ . "/../config/config.php");
        $this->dbConnect();
    }

    /**
     * Initiate the connection
     */
    public function dbConnect(){
        $dbConnection = new \mysqli($this->dbConfig["host"], $this->dbConfig["user"], $this->dbConfig["password"], $this->dbConfig["dbname"]);
        if($dbConnection->connect_errno) {
            echo "Connection failed (" . $dbConnection->connect_errno . ") :" . $dbConnection->connect_error;
            die(); //TODO: redirect to 404.php
        }
        $this->dbConnection = $dbConnection;
    }

    /**
     * @param $sqlRequest
     * Execute the request
     * Store the result in $this->result
     */
    public function execSql($sqlRequest){
        if(!$result = $this->dbConnection->query($sqlRequest)){
            echo "Request failed (" . $this->dbConnection->errno . ") " . $this->dbConnection->error;
            die(); //TODO: redirect to 404.php
        }
        $this->result = $result;
    }

    /**
     * @return \mysqli_result
     */
    public function getResult()
    {
        return $this->result;
    }
}