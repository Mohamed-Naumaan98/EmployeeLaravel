<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
</head>

<body>
    <div class="container mt-4">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
</body>
</html>
<?php /**PATH D:\Desktop\EmployeeManagement\first-app\employee-app\resources\views/layouts/app.blade.php ENDPATH**/ ?>