        
        <?php $__env->startSection('menu'); ?>
        ##parent-placeholder-252a25667dc7c65fe0e9bf62d474bbab9bab4068##
       	 <p>este condenido es añadido al menú principal.</p>
        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('content'); ?>
           
        
        <h1> Datos del usuario: <?php echo e($name); ?>. </h1>
        <h1> La hora actual del sistema es: <?php echo e(now()); ?>.</h1>    

        <?php for($i=0; $i< $max; $i++): ?>
        Registro No.<?php echo e($i+1); ?> ....<?php echo e($dato); ?> <?php echo e($i+1); ?> <br>
        <?php endfor; ?>

        <?php $__env->stopSection(); ?>
       

  
    
  
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\miweb\resources\views/info.blade.php ENDPATH**/ ?>