<?php

    class Modify(){

        $msg = '';
        $root_path = substr(__DIR__, 0, -11);
        require_once $root_path . 'database.php';

        public function create(){
            $database = new Database();
            $link = $database->connect(); 
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $text = htmlspecialchars($_POST['text']);

            if (preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)){
                $query = "INSERT INTO tasks (name, email, text, completed) VALUES ($name, $email, $text, 0)";
                $result = mysqli_query($link, $query);
                header("Location: index.php");
            } else {
                $msg = 'Email is not correct!';
                return false;
            }

            $msg = 'Task added successfully!';

        }

        public function delete(){
            $database = new Database();
            $link = $database->connect(); 
            $id = $_POST['id'];

            if (is_numeric($id)){
                $query = "DELETE FROM tasks WHERE id=$id";
                $result = mysqli_query($link, $query);
                header("Location: index.php");
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
                header("Location: index.php");
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
                header("Location: index.php");
            } else {
                return false;
            }

            $msg = 'Task status updated successfully!';
        }
    }

?>