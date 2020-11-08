<?php

    spl_autoload_register('loadController');

    function loadController($name){
        $path_to_file = 'controllers/' . $name . '.php';
        if (!file_exists($path_to_file)){
            return false;
        }

        require_once $path_to_file;
    }

?>