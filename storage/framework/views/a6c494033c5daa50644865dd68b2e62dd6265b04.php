<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" dir="ltr">

<head>
    <meta charset="utf-8">
    <title><?php echo e(config('app.name', 'Library Management System')); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>"> <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?> "> <!-- Custom stlylesheet -->
</head>

<body>
    <div id="header">
        <!-- HEADER -->
        <div class="container">
            <div class="row">
                <div class="offset-md-4 col-md-4">
                    <div class="logo">
                        <a href="#"><img src="<?php echo e(asset('images/library.png')); ?>"></a>
                    </div>
                </div>
                <div class="offset-md-2 col-md-2">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Hi <?php echo e(auth()->user()->name); ?>

                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="<?php echo e(route('change_password')); ?>">Change Password</a>
                            <a class="dropdown-item" href="#" onclick="document.getElementById('logoutForm').submit()">Log Out</a>
                        </div>
                        <form method="post" id="logoutForm" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /HEADER -->
    <div id="menubar">
        <!-- Menu Bar -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="menu">
                        <li><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
                        <li><a href="<?php echo e(route('authors')); ?>">Authors</a></li>
                        <li><a href="<?php echo e(route('publishers')); ?>">Publishers</a></li>
                        <li><a href="<?php echo e(route('categories')); ?>">Categories</a></li>
                        <li><a href="<?php echo e(route('books')); ?>">Books</a></li>
                        <li><a href="<?php echo e(route('students')); ?>">Reg Students</a></li>
                        <li><a href="<?php echo e(route('book_issued')); ?>">Book Issue</a></li>
                        <li><a href="<?php echo e(route('reports')); ?>">Reports</a></li>
                        <li><a href="<?php echo e(route('settings')); ?>">Settings</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- /Menu Bar -->

    <?php echo $__env->yieldContent('content'); ?>

    <!-- FOOTER -->
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span>© Copyright <?php echo e(now()->format("Y")); ?> <a>BLS</a></span>
                </div>
            </div>
        </div>
    </div>
    <!-- /FOOTER -->
    <script src="<?php echo e(asset('js/jquery-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\ll\resources\views/layouts/app.blade.php ENDPATH**/ ?>