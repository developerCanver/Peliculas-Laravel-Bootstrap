    
    <?php $__env->startSection('content'); ?>
    <div class="row">

    
        <div class="row">       
            <div class="col-sm-4">           
                <img src="<?php echo e(($pelis['poster'])); ?>"  alt="Responsive image" style="max-width: 200px; " >   
            </div>     
            <div class="col-sm-8"> 
                
                <h5 class="card-title"><?php echo e(($pelis['title'])); ?></h5> 
                <p class="card-text"><small class="text-muted">Año: <?php echo e(($pelis['year'])); ?></small></p>        
                <p class="card-text"> Director: <?php echo e(($pelis['director'])); ?></p>
                <p class="card-text"><strong>Resumen:</strong>  <?php echo e(($pelis['synopsis'])); ?></p> <br>   
                
                     <?php if($pelis['rented']=="false"): ?>
                     <p class="card-text"><strong>Estado:</strong> Película disponible  </p><br> 
                    <?php else: ?>
                    <p class="card-text"><strong>Estado:</strong>  Película actualmente alquilada</p><br>           
                    <?php endif; ?>  
                    
                    <?php if($pelis['rented']=="false"): ?>                    
                    
                    <form method="POST" action="<?php echo e(url("catalog/devolver/".$pelis['rented'],$pelis['id'])); ?>">
                        <?php echo csrf_field(); ?>                       
                        <button type="submit" class="btn btn-primary">Alquilar película</button>  
                      </form>
                    <?php else: ?>

                    <form method="POST" action="<?php echo e(url("catalog/devolver/".$pelis['rented'],$pelis['id'])); ?>">
                        <?php echo csrf_field(); ?>                       
                        <button type="submit" class="btn btn-danger">Devolver película</button>  
                      </form>

                              
                    <?php endif; ?>
                    
                    
                    <a href="<?php echo e(url('catalog/edit', $pelis['id'])); ?>" class="btn btn-warning">
                        <i class="fas fa-pen"></i> Editar Pelicula
                    </a>

                    <br><br>
                    <form method="POST" action="<?php echo e(url("catalog/{$pelis['id']}")); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger">Eliminar</button>  
                      </form>


                 
            </div> 
        </div>

    </div>
    <?php $__env->stopSection(); ?>

        

     


<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\videoclub\resources\views/catalog/show.blade.php ENDPATH**/ ?>