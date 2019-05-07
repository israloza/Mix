<?php $__env->startSection('title','Sujetos Obligados'); ?>
<?php $__env->startSection('content'); ?>
    <h1 class="bg-primary text-white text-center">Sujetos Obligados</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="<?php echo e(url("SujetosObligados/create")); ?>">Agregar</a></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>Id Sujeto Obligado</th>
                <th>Lugar</th>
                <th>Fecha</th>
                <th>Hora</th>
                </thead>
                <tbody>
                <?php $__currentLoopData = $SujetosObligados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SujetoObligado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($SujetoObligado->id_sujetos_obligados); ?></td>
                        <td><?php echo e($SujetoObligado->lugar); ?></td>
                        <td><?php echo e($SujetoObligado->fecha); ?></td>
                        <td><?php echo e($SujetoObligado->hora); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Laravel/Protected_File/resources/views/SujetosObligados/index.blade.php ENDPATH**/ ?>