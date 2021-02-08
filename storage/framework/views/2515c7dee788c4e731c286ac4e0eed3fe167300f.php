<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href=" <?php echo e(url('/assets/bootstrap/css/bootstrap.min.css')); ?>" >

    </head>
    <body >
        <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <div class="container">
            <?php echo $__env->yieldContent('content'); ?> 
         </div>

    </div>
    <script src="<?php echo e(url('/assets/bootstrap/js/bootstrap.min.js')); ?>" ></script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\videoclub\resources\views/layout/master.blade.php ENDPATH**/ ?>