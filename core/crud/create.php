<?php 

    require_once '../autoload_crud.php';

    $modify = new Modify();
    $msg = 'Task added successfully!';
    var_dump($_POST);
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $text = htmlspecialchars($_POST['text']);

    $modify->create($name, $email, $text);

    /*

    if (preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)){
        $modify->create($name, $email, $text);
    } else {
        $msg = 'Data is not correct!';
        return false;
    }
*/

?>