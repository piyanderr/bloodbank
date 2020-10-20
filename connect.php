<?php

    class Bloody{
// connecting to database using PDO
    private $servername;
    private $username;
    private $password;
    private $databasename;
    private $charset;
    
    public function connect() {
    
        $this->servername = "localhost";
        $this->username  = "root";
        $this->password = "";
        $this->databasename = "bloodd";
        $this->charset = "utf8mb4";
        
        try {
            
        //data source name
        $dsn = "mysql:host=".$this->servername.";databasename=".$this->databasename.";charset=".$this->charset;
        $pdo = new PDO($dsn, $this->username, $this->password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        return $pdo;
            
        } catch (PDOExceptiom $e) {
            
            echo "Connection Failed: ".$e->getMessage(); 
        }
  
        //connecting using MYSQLI
        //$conn = new mysqli_connect($this->dbServername, $this->dbUsername, $this->$dbPassword, $this->dbName);
        //return $conn;
        
    }
}
?>

