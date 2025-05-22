<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" dir="ltr">

<head>
    <meta charset="utf-8">
    <title><?php echo e(config('app.name', 'Library Management System')); ?></title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>

<body>
    <?php echo $__env->yieldContent('content'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\ll\resources\views/layouts/guest.blade.php ENDPATH**/ ?>