<?php
 class Database{
    private $host = "localhost:3306";
    private $db_name = "tienda";
    private $username = "root";
    private $password = "root";
    private $conn;

    public function getConnection(){
        $this->conn = null;

        try{
            //code..
            $this->conn = new PDO("mysql:host=" .
            $this->host . ":dbname=" .
            $this->db_name, $this->username,
            $this->password);
            $this->conn->setAttribute
            (PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
            //throw $th;
            echo "Error de conexion: " .
            $e->getMessage();
        }
        return $this->conn;
    }

 }


?>