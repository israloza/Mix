<?php $__env->startSection('title','Editar Tipos Empleados '); ?>
<?php $__env->startSection('content'); ?>
    <h1 class="bg-primary text-dark text-left">Editar Tipos Empleados <?php echo e($TipoEmpleado->descripcion); ?></h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="<?php echo e(url("TiposEmpleados")); ?>">Volver</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="<?php echo e(route("TiposEmpleados.update",$TipoEmpleado->id_tipo_empleado)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field("PUT"); ?>
                <div class="form-group">
                    <label for="exampleInputPassword1">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" value='<?php echo e($TipoEmpleado->descripcion); ?>'>


                </div>
                <button type="submit" class="btn-primary">Editar</button>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Laravel/Protected_File/resources/views/TiposEmpleados/edit.blade.php ENDPATH**/ ?>