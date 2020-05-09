<?php
    class DbConfig{

        private $conn;

        function __construct(){

        }

        public function DBConnection(){
            $this->conn = new PDO('mysql:host=localhost;dbname=php_playlist','root','');
            return $this->conn;
        }
    }
?>