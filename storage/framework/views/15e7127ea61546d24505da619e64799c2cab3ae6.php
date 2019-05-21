<?php $__env->startSection('title','Tipos Empleados'); ?>
<?php $__env->startSection('content'); ?>
    <h1 class="text-black-50 text-center">Tipos Empleados</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="<?php echo e(url("TiposEmpleados/create")); ?>">Agregar</a></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>

                <th class="table-active">Descripción</th>
                <th class="table-active">Actualizar</th>
                <th class="table-active">Eliminar</th>
                </thead>
                <tbody>
                <?php $__currentLoopData = $TiposEmpleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $TipoEmpleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>

                        <td class="table-success"><?php echo e($TipoEmpleado->descripcion); ?></td>
                        <td class="table-success">
                            <a href="<?php echo e(route('TiposEmpleados.edit',$TipoEmpleado->id_tipo_empleado)); ?>" onclick="return confirm('¿Seguro que deseas modificarlo?')" class="btn btn-outline-primary" name="actualizar"><i  class="fas fa-pen-alt"></i></a>
                        </td>
                        <td class="table-success">
                            <a href="<?php echo e(route('TiposEmpleados.destroy',$TipoEmpleado->id_tipo_empleado)); ?>" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-outline-danger" name="eliminar"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Administradores.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Laravel/Protected_File/resources/views/TiposEmpleados/index.blade.php ENDPATH**/ ?>