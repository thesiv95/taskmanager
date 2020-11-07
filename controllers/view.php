<?php
    $root_path = substr(__DIR__, 0, -11);
    echo $root_path;
    require_once $root_path . 'config.php';

    

    class View {

        

        public function view($offset){ 
            $database = new Database();
            $link = $database->connect();   
            $query = "SELECT id,name,email,text,completed FROM tasks LIMIT 3 OFFSET $offset";
            $result = mysqli_query($link, $query);
            return $result;
        }


        public function all_rows_length(){
            $database = new Database();
            $link = $database->connect();
            $query = "SELECT id,name,email,text,completed FROM tasks";
            $result = mysqli_query($link, $query);
            return mysqli_num_rows($result); 
        }
    }


?>