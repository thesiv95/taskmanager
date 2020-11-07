<?php include 'autoload.php'; ?>
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
        // create, login, logout, change_status, edit
        
        // TODO: finish pagination

        $view = new View(0);
        $data = $view->view(0); // offset is 0 by default
        
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

        <!-- add form -->
<div class="row">
    <div class="col-md-12 col-sm-12">
        <form action="/create.php">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="text">Task text</label>
                <textarea class="form-control" id="text" name="text" rows="3"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success mb-2">Add new task</button>
                <button type="reset" class="btn btn-danger mb-2">Clear all</button>
            </div>
        </form>
    </div>
</div>
<!-- /add form -->
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
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($data, MYSQLI_ASSOC)): ?>
            <input type="hidden" name="task_id" value=<?php echo $row['id']; ?>>
            <tr <?php if ($row['completed'] === '1') : ?>class="table-success"<?php endif; ?>>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['text']; ?></td>
                <td>
                    <?php if ($row['completed'] === '1') : ?>
                    Completed
                    <?php else: ?>
                    Not completed
                    <?php endif; ?>
                </td>
            </tr>
            <?php endwhile; ?>
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
                
                <?php
                    $data_length = $view->all_rows_length();
                    $pagination_counter = 1;
                ?>
                <li class="page-item">
                    <a class="page-link" href="/view.php?offset=<?php echo $pagination_counter - 1 ?>"><?php echo $pagination_counter; ?></a>
                </li>
                
                <?php while ($data_length >= 3): ?>
                <?php $pagination_counter = $pagination_counter + 1; ?>
                <li class="page-item">
                    <a class="page-link" href="/view.php?offset=<?php echo $pagination_counter * 2 ?>">
                    <?php echo $pagination_counter; ?>
                    </a>
                </li>
                <?php $data_length = round($data_length / 3); ?>
                <?php endwhile; ?>
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