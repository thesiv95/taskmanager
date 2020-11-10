<!-- sort -->
<form action="core/sorter.php" method="POST">
    <div class="form-group">
        <label for="sortBy">Sort by</label>
        <select class="form-control" name="sort-by-field">
            <option value="">--- Please select ---</option>
            <option value="name">Name</option>
            <option value="email">Email</option>
            <option value="task_text">Task text</option>
            <option value="status">Status</option>
        </select>
    </div>
    <div class="form-options">
    
            <div class="row">
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sort-type" value="asc" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Ascending
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sort-type" value="desc">
                        <label class="form-check-label" for="exampleRadios2">
                            Descending
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-light">Sort!</button>
                </div>
            </div>
    </div>
</form>
<!-- /sort -->