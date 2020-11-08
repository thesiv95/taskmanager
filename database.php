<?php
    // DB configuration
    class Database {
        public function connect(){
            $host = 'localhost';
            $port = 3307;
            $dbname = 'beejee';
            $username = 'root';
            $password = '';
            // Do not change anything after this line
            $mysqli = new mysqli($host, $username, $password, $dbname, $port) or die('DB connection error');
            return $mysqli;
        }
    }

?>