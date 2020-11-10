<?php
    session_start();
    require_once '../autoload_core.php';

    $modify = new Modify();
    
    $id = $_POST['task_id'];
    $text = htmlspecialchars($_POST['text_'.$id]);

    $msg = 'Task updated successfully!';

    if (!is_numeric($id)){
        $msg = 'Data is not correct!';
        return false;
    }

    $modify->edit($id, $text);
    $_SESSION['msg'] = $msg;

?>