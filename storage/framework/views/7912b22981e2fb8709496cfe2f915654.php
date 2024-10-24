<!DOCTYPE html>
<html lang="en">
<?php
$name = session('name');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <style>
        body {
            padding-top: 70px;
            /* Adjust this based on the height of the navbar */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href='https://www.facebook.com/SHaheen620'>Seif Shaheen</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo e(route('home')); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('games')); ?>">Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('posts')); ?>">Posts</a>
                    </li>
                    <?php if(auth()->guard()->check()): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('profile', ['user' => Auth::user()->id])); ?>">Profile</a>
                        </li>
                    <?php endif; ?>
                </ul>
                <form class="d-flex" role="search" method="post" action="<?php echo e(route('search')); ?>">
                    <?php echo csrf_field(); ?>
                    <input class="form-control me-2" type="search" name="query" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <?php if(auth()->guard()->check()): ?>
                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-outline-danger">Logout</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+RZ6i5YeoCdTpg6K4YFeC6wznFQvD" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH D:\laravel course\systemProject\resources\views/layout/navbar.blade.php ENDPATH**/ ?>