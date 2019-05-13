<?php $__env->startSection('title','Personas Fisicas'); ?>
<?php $__env->startSection('content'); ?>
    <h1 class="text-black-50 text-center">Personas Fisicas</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="<?php echo e(url("PersonasFisicas/create")); ?>">Agregar</a></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <!--<th class="table-active">Id Persona Fisica</th>-->
                <th class="table-active">Apellido Paterno</th>
                <th class="table-active">Apellido Materno</th>
                <th class="table-active">Nombre</th>
                <th class="table-active">Actualizar</th>
                <th class="table-active">Eliminar</th>
                </thead>
                <tbody>
                <?php $__currentLoopData = $PersonasFisicas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $PersonaFisica): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <!--<td class="table-success"><?php echo e($PersonaFisica->id_personas_fisicas); ?></td>-->
                        <td class="table-success"><?php echo e($PersonaFisica->ap); ?></td>
                        <td class="table-success"><?php echo e($PersonaFisica->am); ?></td>
                        <td class="table-success"><?php echo e($PersonaFisica->nombre); ?></td>
                        <td class="table-success">
                            <a href="<?php echo e(route('PersonasFisicas.edit',$PersonaFisica->id_personas_fisicas)); ?>" onclick="return confirm('¿Seguro que deseas modificarlo?')" class="btn btn-outline-primary" name="actualizar"><i  class="fas fa-pen-alt"></i></a>
                        </td>
                        <td class="table-success">
                            <a href="<?php echo e(route('PersonasFisicas.destroy',$PersonaFisica->id_personas_fisicas)); ?>" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-outline-danger" name="eliminar"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Administradores.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Laravel/Protected_File/resources/views/PersonasFisicas/index.blade.php ENDPATH**/ ?>