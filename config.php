<?php

    $host = 'localhost';
    $port = 3307;
    $dbname = 'beejee';
    $username = 'root';
    $password = '';

    $mysqli = new mysqli($host, $username, $password, $dbname, $port) or die('Error');

?>