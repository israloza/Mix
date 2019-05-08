<?php $__env->startSection('title','Personas Fisicas'); ?>
<?php $__env->startSection('content'); ?>
    <h1 class="bg-primary text-white text-center">Personas Fisicas</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="<?php echo e(url("PersonasFisicas/create")); ?>">Agregar</a></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>Id Persona Fisica</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Nombre</th>
                </thead>
                <tbody>
                <?php $__currentLoopData = $PersonasFisicas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $PersonaFisica): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($PersonaFisica->id_personas_fisicas); ?></td>
                        <td><?php echo e($PersonaFisica->ap); ?></td>
                        <td><?php echo e($PersonaFisica->am); ?></td>
                        <td><?php echo e($PersonaFisica->nombre); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Administradores.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ara/Documentos/Proyecto/Protected-File/resources/views/PersonasFisicas/index.blade.php ENDPATH**/ ?>