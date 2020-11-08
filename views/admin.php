<?php include '_includes/header.php'; ?>
  <?php
        
        session_start();

        // If not logged
        if(!isset($_SESSION["loggedin"])){
            header("Location: /login");
            exit;
        }
        

        $fetch = new Fetch(0);
        $data = $fetch->view(0); // offset is 0 by default
        
    ?>
    
    <div class="container">
        <?php include '_includes/navbar.php'; ?>
        <?php include '_includes/sort.php'; ?>
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
                <?php while ($row = mysqli_fetch_array($data, MYSQLI_ASSOC)): ?>
                    <form action="core/crud/edit.php" method="POST"><?php // a form just to grab text w/o Javascript ?>
                        <tr class="table-success">
                            <input type="hidden" name="task_id" value=<?php echo $row['id']; ?>>
                            <tr <?php if ($row['completed'] === '1') : ?>class="table-success"<?php endif; ?>>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td>
                                <input type="text" class="form-control" 
                                name="text_<?php echo $row['id']; ?>" 
                                value="<?php echo $row['text']; ?>">
                            </td>
                            <td>
                                <?php if ($row['completed'] === '1') : ?>
                                Completed
                                <?php else: ?>
                                Not completed
                                <?php endif; ?>
                            <td>
                                <button type="submit" class="btn btn-primary mb-2">Edit</button>
                                <a 
                                href="core/crud/change_status.php?to=<?php 
                                    if ($row['completed'] === '1') {echo '0';} else {echo '1';}
                                ?>&id=<?php echo $row['id'] ?>" 
                                class="btn btn-warning mb-2">Change status</a>
                                <a href="/core/crud/delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger mb-2">Delete</a>
                            </td>
                        </tr>
                    </form>
                <?php endwhile; ?>
                </tbody>
                </table>
            </div>
        </div>
        <!-- /table -->
        <?php include '_includes/pagination.php'; ?>
    </div>
<?php include '_includes/footer.php'; ?>