<?php

    class Modify {

        public function __construct() {
            $root_path = substr(__DIR__, 0, -11);
            require_once $root_path . 'database.php';
        }
        

        public function connect_to_db(){
            $database = new Database();
            $link = $database->connect(); 
            return $link;
        }

        public function create($name, $email, $text){
            $link = $this->connect_to_db();
            $query = "INSERT INTO tasks (`name`, `email`, `text`, `completed`) VALUES ('$name', '$email', '$text', 0)";
            $result = mysqli_query($link, $query);
            header("Location: /");
        }

        public function delete($id){
            $link = $this->connect_to_db();
            $query = "DELETE FROM `tasks` WHERE `id`=$id";
            $result = mysqli_query($link, $query);
            header("Location: /admin");
        }

        public function edit($id, $text){
            $link = $this->connect_to_db();
            $query = "UPDATE `tasks` SET `text`='$text' WHERE `id`=$id";
            echo $query;
            $result = mysqli_query($link, $query);
            header("Location: /admin");
        }

        public function change_status($to, $id){
            $link = $this->connect_to_db();
            $query = "UPDATE `tasks` SET `completed`=$to WHERE `id`=$id";
            $result = mysqli_query($link, $query);
            header("Location: /admin");  
        }
    }

?>