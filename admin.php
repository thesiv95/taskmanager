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