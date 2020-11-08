<?php

    require_once 'autoload_core.php';
    $fetch = new Fetch();

    $offset = 1;

    if (isset($_GET['offset'])){
        $offset = (int)$_GET['offset'];
    }

    $result = $fetch->view($offset);

    return $result;

?>