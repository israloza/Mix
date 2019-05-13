<?php $__env->startSection('title','Editar Logins'); ?>
<?php $__env->startSection('content'); ?>
    <h1 class="bg-primary text-dark text-left">Editar Logins <?php echo e($Login->nombre); ?></h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="<?php echo e(url("Logins")); ?>">Volver</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="<?php echo e(route("Logins.update",$Login->id_login)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field("PUT"); ?>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value='<?php echo e($Login->nombre); ?>'>

                    <label for="exampleInputPassword1">Apellido Paterno</label>
                    <input type="text" class="form-control" name="ap" value='<?php echo e($Login->ap); ?>'>

                    <label for="exampleInputPassword1">Apellido Materno</label>
                    <input type="text" class="form-control" name="am" value='<?php echo e($Login->am); ?>'>

                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="text" class="form-control" name="contraseña" value='<?php echo e($Login->contraseña); ?>'>

                    <label for="exampleInputPassword1">Correo Electronico</label>
                    <input type="text" class="form-control" name="correo" value='<?php echo e($Login->correo); ?>'>

                </div>
                <button type="submit" class="btn-primary">Editar</button>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Laravel/Protected_File/resources/views/Logins/edit.blade.php ENDPATH**/ ?>