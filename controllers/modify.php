<?php

    class Modify {

        public function __construct() {
            // $root_path = substr(__DIR__, 0, -11);
            // require_once $root_path . 'database.php';
        }
        // $root_path = substr(__DIR__, 0, -11);
        

        public function create($name, $email, $text){

            $root_path = substr(__DIR__, 0, -11);
            require_once $root_path . 'database.php';

            $database = new Database();
            $link = $database->connect(); 

            
            
            $query = "INSERT INTO tasks (`name`, `email`, `text`, `completed`) VALUES ('$name', '$email', '$text', 0)";
            $result = mysqli_query($link, $query);
            
           header("Location: /");
        }

        public function delete(){
            $database = new Database();
            $link = $database->connect(); 
            $id = $_POST['id'];

            if (is_numeric($id)){
                $query = "DELETE FROM tasks WHERE id=$id";
                $result = mysqli_query($link, $query);
                header("Location: /");
            } else {
                return false;
            }

            $msg = 'Task deleted successfully!';
        }

        public function edit(){
            $id = $_POST['id'];
            $text = htmlspecialchars($_POST['text']);

            if (is_numeric($id)){
                $query = "UPDATE tasks SET text=$text WHERE id=$id";
                $result = mysqli_query($link, $query);
                header("Location: /");
            } else {
                return false;
            }

            $msg = 'Task updated successfully!';

        }

        public function change_status(){
            $to = $_POST['to'];
            $id = $_POST['id'];
            if (is_numeric($to) && is_numeric($id)){
                $query = "UPDATE tasks SET completed=$to WHERE id=$id";
                $result = mysqli_query($link, $query);
                header("Location: /");
            } else {
                return false;
            }

            $msg = 'Task status updated successfully!';
        }
    }

?>