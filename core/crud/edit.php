<?php

    require_once '../autoload_crud.php';

    $modify = new Modify();
    
    $id = $_POST['id'];
    $text = htmlspecialchars($_POST['text']);

    $msg = 'Task updated successfully!';

    if (!is_numeric($id)){
        $msg = 'Data is not correct!';
        return false;
    }

    $modify->edit($id, $text);

?>