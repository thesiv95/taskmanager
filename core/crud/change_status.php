<?php
    
    require_once '../autoload_core.php';

    $modify = new Modify();
    $to = $_GET['to'];
    $id = $_GET['id'];
    
    $msg = 'Task status updated successfully!';

    if (!is_numeric($to) && !is_numeric($id)){
        $msg = 'Data is not correct!';
        return false;
    }

    $modify->change_status($to, $id);

?>