<?php

    require_once 'autoload_core.php';
    $fetch = new Fetch();

    $field = htmlspecialchars($_POST['sort-by-field']);
    $type = htmlspecialchars($_POST['sort-type']);
    $offset = 0;

    if ($field === "") return false;

    if ($type != "asc" || $type != "desc") return false;

    $fetch->view_sorted($field, $type, $offset);




?>