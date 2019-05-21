<?php $__env->startSection('title','Personas'); ?>
<?php $__env->startSection('content'); ?>
    <h1 class="bg-primary text-white text-center">Personas</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="<?php echo e(url("Personas/create")); ?>">Agregar</a></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>Nombre</th>
                <th>Apellido Parterno</th>
                <th>Apellido Materno</th>
                <th>Usuario</th>

                </thead>
                <tbody>
                <?php $__currentLoopData = $Personas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Persona): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="table-success"><?php echo e($Persona->nombre); ?></td>
                        <td class="table-success"><?php echo e($Persona->ap); ?></td>
                        <td class="table-success"><?php echo e($Persona->am); ?></td>
                        <td><?php echo e(isset($Persona->getUser[0])?$Persona->getUser[0]->name:""); ?></td>
                         </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('Template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Laravel/Protected_File/resources/views/Personas/index.blade.php ENDPATH**/ ?>