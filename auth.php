<?php

    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);

    if ($login === 'admin' && $password === '123'){
        header('Location: /admin');
    } else {
        header('Location: /login');
    }


?>