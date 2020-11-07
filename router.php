<?php
    
    $path_from_uri = trim($_SERVER['REQUEST_URI'], '/');
    $path_from_uri = parse_url($path_from_uri, PHP_URL_PATH);
    $path_to_views = __DIR__ . '/views/';

    $routes = [
        '' => $path_to_views . 'home.php',
        'admin' => $path_to_views . 'admin.php',
        'login' => $path_to_views . 'login.php'
    ];

    if (array_key_exists($path_from_uri, $routes)){
        require $routes[$path_from_uri];
    } else {
        require $path_to_views . '404.php';
    }

?>