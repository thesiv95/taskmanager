<?php include '_includes/header.php'; ?>
<?php

   



?>
<div class="container">
    <div class="row">
        <h1>Administrator login</h1>
    </div>
    <div class="row">
        <form class="form-inline" action="auth.php" method="POST">
            <div class="form-group mb-2">
                <label for="login" class="sr-only">Email</label>
                <input type="text" class="form-control" name="login" id="login" value="">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="password" class="sr-only">Password</label>
                <input type="password" class="form-control" name="password" id="password" value="">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
        </form>
    </div>
</div>
<?php include '_includes/footer.php'; ?>