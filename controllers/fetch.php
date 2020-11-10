<?php

    class Fetch {

        public function __construct() {
            $root_path = substr(__DIR__, 0, -11);
            require_once $root_path . 'database.php';
        }
    
    
        public function connect_to_db(){
            $database = new Database();
            $link = $database->connect(); 
            return $link;
        }

        public function view($offset){ 
            $link = $this->connect_to_db();  
            $query = "SELECT id,name,email,text,completed FROM tasks LIMIT 3 OFFSET $offset";
            $result = mysqli_query($link, $query);
            return $result;
        }

        public function view_sorted($field, $type, $offset){
            $type = strtoupper($type); // ASC | DESC
            $link = $this->connect_to_db();
            $query = "SELECT id,name,email,text,completed FROM tasks ORDER BY $field $type LIMIT 3 OFFSET $offset";
            $result = mysqli_query($link, $query);
            return $result;
        }

        public function all_rows_length(){
            $link = $this->connect_to_db();
            $query = "SELECT id,name,email,text,completed FROM tasks";
            $result = mysqli_query($link, $query);
            return mysqli_num_rows($result); 
        }
    }


?>