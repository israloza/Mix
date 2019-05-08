<?php $__env->startSection('title','Datos Personales'); ?>
<?php $__env->startSection('content'); ?>
    <h1 class="bg-primary text-white text-center">Datos Personales</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="<?php echo e(url("DatosPersonales/create")); ?>">Agregar</a></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>Id Datos Personales</th>
                <th>Descripción</th>

                </thead>
                <tbody>
                <?php $__currentLoopData = $DatosPersonales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $DatoPersonal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($DatoPersonal->id_datos_personales); ?></td>
                        <td><?php echo e($DatoPersonal->descripcion); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('Template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ara/Documentos/Proyecto/Protected-File/resources/views/DatosPersonales/index.blade.php ENDPATH**/ ?>