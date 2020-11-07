<!-- add form -->
<div class="row">
    <div class="col-md-12 col-sm-12">
        <form action="/create.php" method="POST">
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