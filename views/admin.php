<?php include '_includes/header.php'; ?>
  <?php
        
        

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
                    <tr class="table-success">
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
                        <td>
                            <a href="/edit?id=<?php echo $row['id'] ?>" class="btn btn-primary mb-2">Edit</a>
                            <a 
                            href="/change_status?to=<?php 
                                if ($row['completed'] === '1') {echo '0';} else {echo '1';}
                            ?>&id=<?php echo $row['id'] ?>" 
                            class="btn btn-warning mb-2">Change status</a>
                            <a href="/delete?id=<?php echo $row['id'] ?>" class="btn btn-danger mb-2">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
                </table>
            </div>
        </div>
        <!-- /table -->
        <?php include '_includes/pagination.php'; ?>
    </div>
<?php include '_includes/footer.php'; ?>