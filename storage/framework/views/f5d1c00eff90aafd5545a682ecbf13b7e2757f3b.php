<?php $__env->startSection('title','Personas Fisicas'); ?>
<?php $__env->startSection('content'); ?>
    <h1 class="bg-primary text-white text-center">Personas Morales</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="<?php echo e(url("PersonasMorales/create")); ?>">Agregar</a></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>Id Personas morales</th>
                <th>Razón o denominación social</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Nombre</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
                </thead>
                <tbody>
                <?php $__currentLoopData = $PersonasMorales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $PersonaMoral): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($PersonaMoral->id_personas_morales); ?></td>
                        <td><?php echo e($PersonaMoral->razon_den_social); ?></td>
                        <td><?php echo e($PersonaMoral->ap_rep); ?></td>
                        <td><?php echo e($PersonaMoral->am_rep); ?></td>
                        <td><?php echo e($PersonaMoral->nom_rep); ?></td>
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

<?php echo $__env->make('Template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Laravel/Protected_File/resources/views/PersonasMorales/index.blade.php ENDPATH**/ ?>