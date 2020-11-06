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
        // TODO: index page
        // show buttons delete & update if authorized
        require_once 'config.php';


    ?>
    
    <div class="container">
        <!-- navbar -->
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="/">Task Manager</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin">Admin (not logged)</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- /navbar -->
        <!-- table -->
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Task text</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-success">
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@twitter</td>
                        <td>
                            <input type="checkbox" data-id="1">
                        </td>
                        <td>
                            <a href="/edit.php?id=1" class="btn btn-primary mb-2">Edit</a>
                            <a href="/change_status.php?to=0&id=1" class="btn btn-warning mb-2">Change status</a>
                            <a href="/delete.php?id=1" class="btn btn-danger mb-2">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@twitter</td>
                        <td>Completed</td>
                        <td>
                        <a href="/edit.php?id=1" class="btn btn-primary mb-2">Change text</a>
                            <a href="/change_status.php?to=0&id=1" class="btn btn-warning mb-2">Change status</a>
                            <a href="/delete.php?id=1" class="btn btn-danger mb-2">Delete status</a>
                        </td>
                    </tr>
                    <tr>
                        <td>@twitter</td>
                        <td>@twitter</td>
                        <td>@twitter</td>
                        <td>Completed</td>
                        <td>
                            <a href="/edit.php?id=1" class="btn btn-primary mb-2">Change text</a>
                            <a href="/change_status.php?to=0&id=1" class="btn btn-warning mb-2">Change status</a>
                            <a href="/delete.php?id=1" class="btn btn-danger mb-2">Delete status</a>
                        </td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
        <!-- /table -->
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