<?php

  require "../config.php";

  class Database{

    private $mysqli;

    function __construct(){
      $this->mysqli = null;
    }

    public function connectDB(){
      $this->mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    }

    public function executeStatment($query){
        $stmt = $this->mysqli->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function query($query){
      $result = $this->mysqli->query($query);
      return $result;
    }
    
  }

?>
