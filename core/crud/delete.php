<?php 

    require_once '../autoload_core.php';

    $modify = new Modify();
    $msg = 'Task deleted successfully!';
    $id = $_GET['id'];

    if (!is_numeric($id)){
        $msg = 'Data is not correct!';
        return false;
    }

    $modify->delete($id);

?>