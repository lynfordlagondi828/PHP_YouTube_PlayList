<?php
    class DbFunctions{

        private $conn;


        function __construct(){

            require_once 'DbConfig.php';
            $database = new DbConfig();

            $this->conn = $database->DBConnection();

        }


        //Insert Data into mysql database
        public function insert_data($title,$description){

            $SQL = "INSERT INTO posts(title,description)VALUES(?,?)";
            $stmt = $this->conn->prepare($SQL);
            $stmt->execute(array($title,$description));
            $result = $stmt->fetch();
            return $result;
        }

        //get data
        public  function getData(){

            $MYSQL = "SELECT * FROM posts";
            $stmt = $this->conn->prepare($MYSQL);
            $stmt->execute(array());
            $result = $stmt->fetchAll();
            return $result;
        }

        public function getSingleData($id){

            $sql = "SELECT * FROM posts WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(array($id));
            $result = $stmt->fetch();
            return $result;
        }

        //get all the records from the database
        public function getAllRecords(){

          $sql = "SELECT * FROM posts";
          $stmt = $this->conn->prepare($sql);
          $stmt->execute(array());
          $result = $stmt->fetchAll();
          return $result;
        }


    }
?>
