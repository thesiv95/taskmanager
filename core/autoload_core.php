<?php
    spl_autoload_register('loadControllerCrud');

    function loadControllerCrud($name){
        $path_to_file = substr(__DIR__, 0, -5) . '/controllers/' . $name . '.php';
        echo $path_to_file;
        if (!file_exists($path_to_file)){
            return false;
        }

        require_once $path_to_file;
    }


?>