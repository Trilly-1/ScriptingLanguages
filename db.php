<?php
//Database connection using OOP MySQLi

class Database {
    //database credentials
    private $host = "localhost";
    private $user = "root"; 
    private $pass = "";     
    private $dbname = "company_db";
    public $conn;


    public function __construct() {

        //create new mysqli connection
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        if ($this->conn->connect_error) {
            die("Database Connection failed: " . $this->conn->connect_error);
        }
    }
    //Close database connection
    public function closeConnection() {
        $this->conn->close();
    }
}
?>
