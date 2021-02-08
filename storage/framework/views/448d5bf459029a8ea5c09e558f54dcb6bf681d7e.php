<?php $__env->startSection('content'); ?>
<form method="POST" action="<?php echo e(url("catalog/{$pelis['id']}")); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <h3 class="text-center" >Modificar película</h3>
    <div class="col-sm-12 d-flex align-items-center d-flex justify-content-center">           
        <img src="<?php echo e(($pelis['poster'])); ?>"  alt="Responsive image" style="max-width: 200px; " >   
    </div> 
    <div class="form-row">        
        <div class="form-group col-md-6">
            <label for="inputEmail4">Título</label>
            <input type="text" class="form-control" value="<?php echo e(($pelis['title'])); ?>" name="title">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Año</label>
            <input type="text" class="form-control" value="<?php echo e(($pelis['year'])); ?>" name="year">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Director </label>
            <input type="text" class="form-control" value="<?php echo e(($pelis['director'])); ?>" name="director">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Poster</label>
            <input type="text" class="form-control" value="<?php echo e(($pelis['poster'])); ?>" name="poster">

        </div>
    </div>
    <fieldset class="form-group">
        <div class="row">
          <legend class="col-form-label col-sm-2 pt-0">Alquilada</legend>
          <div class="col-sm-10">
            <?php if($pelis['rented']=="true"): ?>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="rented" id="rented1" value="true" checked>
                <label class="form-check-label" for="rented1">
                  Sí
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="rented" id="rented2" value="false">
                <label class="form-check-label" for="rented2">
                  No
                </label>
              </div>
            <?php else: ?>
           

            <div class="form-check">
              <input class="form-check-input" type="radio" name="rented" id="rented1" value="true" >
              <label class="form-check-label" for="rented1">
                Sí
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="rented" id="rented2" value="false" checked>
              <label class="form-check-label" for="rented2">
                No
              </label>
            </div>
                       
            <?php endif; ?>
           
          </div>
        </div>
      </fieldset>
    <div class="form-row">       
        <div class="form-group col-md-6">
            <label for="inputPassword4">Resumen</label>
            <input type="textarea" class="form-control" value="<?php echo e(($pelis['synopsis'])); ?>" name="synopsis">
        </div>
    </div>     
    <button type="submit" class="btn btn-primary">Modificar película</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\videoclub\resources\views/catalog/edit.blade.php ENDPATH**/ ?>