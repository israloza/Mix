<?php $__env->startSection('title','Editar Personas Morales '); ?>
<?php $__env->startSection('content'); ?>
    <h1 class="bg-primary text-dark text-left">Editar Personas Morales <?php echo e($PersonasMoral->nom_rep); ?></h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="<?php echo e(url("PersonasMorales")); ?>">Volver</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="<?php echo e(route("PersonasMorales.update",$PersonasMoral->id_personas_morales)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field("PUT"); ?>
                <div class="form-group">
                    <label for="exampleInputPassword1">Razón o denominación social</label>
                    <input type="text" class="form-control" name="razon_den_social" value='<?php echo e($PersonasMoral->razon_den_social); ?>'>
                    <label for="exampleInputPassword1">Apellido Paterno</label>
                    <input type="text" class="form-control" name="ap_rep" value='<?php echo e($PersonasMoral->ap_rep); ?>'>
                    <label for="exampleInputPassword2">Apelllido Materno</label>
                    <input type="text" class="form-control" name="am_rep" value='<?php echo e($PersonasMoral->am_rep); ?>'>
                    <label for="exampleInputPassword3">Nombre</label>
                    <input type="text" class="form-control" name="nom_rep" value='<?php echo e($PersonasMoral->nom_rep); ?>'>

                </div>
                <button type="submit" class="btn-primary">Editar</button>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Laravel/Protected_File/resources/views/PersonasMorales/edit.blade.php ENDPATH**/ ?>