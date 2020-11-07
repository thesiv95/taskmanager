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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task manager</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        // TODO: api
        // view, create, login, logout, change_status, edit
        // TODO: index page + autoloads
        
        require_once 'config.php';

        $request_uri = $_SERVER['REQUEST_URI'];
        $path_to_views = __DIR__ . '/views/';

    ?>
    
    <div class="container">
        <!-- navbar -->
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="/taskmanager/">Task Manager</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="/taskmanager/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/taskmanager/admin/">Admin (not logged)</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- /navbar -->

        <?php
            // Router
            
           
        ?>


        <!-- pagination -->
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
                </li>
            </ul>
        </nav>
        <!-- /pagination -->
    </div>

    
    
   


</body>
</html>