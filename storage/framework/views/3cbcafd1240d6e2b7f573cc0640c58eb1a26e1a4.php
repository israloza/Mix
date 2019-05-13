<?php $__env->startSection('title','Logins'); ?>
<?php $__env->startSection('content'); ?>
    <h1 class="bg-primary text-white text-center">Logins</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="<?php echo e(url("Logins/create")); ?>">Agregar</a></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>Nombre</th>
                <th>Apellido Parterno</th>
                <th>Apellido Materno</th>
                <th>Contraeña</th>
                <th>Correo Electronico</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
                </thead>
                <tbody>
                <?php $__currentLoopData = $Logins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Login): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="table-success"><?php echo e($Login->nombre); ?></td>
                        <td class="table-success"><?php echo e($Login->ap); ?></td>
                        <td class="table-success"><?php echo e($Login->am); ?></td>
                        <td class="table-success"><?php echo e($Login->contraseña); ?></td>
                        <td class="table-success"><?php echo e($Login->correo); ?></td>

                        <td class="table-success">
                            <a href="<?php echo e(route('Logins.edit',$Login->id_login)); ?>" onclick="return confirm('¿Seguro que deseas modificarlo?')" class="btn btn-outline-primary" name="actualizar"><i  class="fas fa-pen-alt"></i></a>
                        </td>
                        <td class="table-success">
                            <a href="<?php echo e(route('Logins.destroy',$Login->id_login)); ?>" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-outline-danger" name="eliminar"><i class="fas fa-trash"></i><Login
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Laravel/Protected_File/resources/views/Logins/index.blade.php ENDPATH**/ ?>