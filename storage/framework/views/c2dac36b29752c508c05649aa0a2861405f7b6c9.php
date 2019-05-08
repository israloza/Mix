<?php $__env->startSection('title','Editar Personas Físicas '); ?>
<?php $__env->startSection('content'); ?>
    <h1 class="bg-primary text-dark text-left">Editar Personas Fisicas <?php echo e($PersonasFisica->nombre); ?></h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="<?php echo e(url("PersonasFisicas")); ?>">Volver</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="<?php echo e(route("PersonasFisicas.update",$PersonasFisica->id_personas_fisicas)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field("PUT"); ?>
                <div class="form-group">
                    <label for="exampleInputPassword1">Apellido Paterno</label>
                    <input type="text" class="form-control" name="ap" value='<?php echo e($PersonasFisica->ap); ?>'>
                    <label for="exampleInputPassword2">Apelllido Materno</label>
                    <input type="text" class="form-control" name="am" value='<?php echo e($PersonasFisica->am); ?>'>
                    <label for="exampleInputPassword3">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value='<?php echo e($PersonasFisica->nombre); ?>'>

                </div>
                <button type="submit" class="btn-primary">Editar</button>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Laravel/Protected_File/resources/views/PersonasFisicas/edit.blade.php ENDPATH**/ ?>