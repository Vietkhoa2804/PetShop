<?php 
    Class Database {
        private $host = 'localhost';
        private $username = 'root';
        private $password = 'root';
        private $db_name = 'PetShop';
        public $conn;
        public function __construct() {
            try{

                $this->conn = new PDO ("mysql:host=$this->host;dbname=$this->db_name", $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }
        public function __destruct() {
            $this->conn = null;
        }
    }
?>