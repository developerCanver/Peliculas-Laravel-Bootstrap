<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    
        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\miweb\resources\views/layout/master.blade.php ENDPATH**/ ?>