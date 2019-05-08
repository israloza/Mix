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
                <th>Id Login</th>
                <th>Nombre</th>
                <th>Apellido Parterno</th>
                <th>Apellido Materno</th>
                <th>Contraeña</th>
                <th>Correo</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
                </thead>
                <tbody>
                <?php $__currentLoopData = $Logins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Login): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($Login->id_login); ?></td>
                        <td><?php echo e($Login->nombre); ?></td>
                        <td><?php echo e($Login->ap); ?></td>
                        <td><?php echo e($Login->am); ?></td>
                        <td><?php echo e($Login->contraseña); ?></td>
                        <td><?php echo e($Login->correo); ?></td>
                        <td>
                            <a href="" class="btn btn-outline-primary" name="actualizar"><i class="fas fa-pen-alt"></i></a>
                        </td>
                        <td>
                            <form action="" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button href="" class="btn btn-outline-danger" name="eliminar"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Laravel/Protected_File/resources/views/Logins/index.blade.php ENDPATH**/ ?>