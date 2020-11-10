<!-- navbar -->

<?php $uri = $_SERVER['REQUEST_URI']; ?>
<div class="row">
    <div class="col-md-12 col-sm-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">Task Manager</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item
                                <?php if ($uri === '/'): ?>   
                                active
                                <?php endif; ?>">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item <?php if ($uri === '/admin'): ?>   
                                active
                                <?php endif; ?>">
                        <a class="nav-link" href="/admin">
                            Admin
                        </a>
                    </li>
                </ul>
            </div>
            <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true): ?>
            <a class="btn btn-danger" href="core/logout.php">Logout</a>
            <?php endif; ?>
        </nav>
    </div>
</div>
<!-- /navbar -->