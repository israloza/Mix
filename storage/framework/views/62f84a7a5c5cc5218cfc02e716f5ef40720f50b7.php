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
                <th>Lugar</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
                </thead>
                <tbody>
                <?php $__currentLoopData = $SujetosObligados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SujetoObligado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="table-success"><?php echo e($SujetoObligado->lugar); ?></td>
                        <td class="table-success"><?php echo e($SujetoObligado->fecha); ?></td>
                        <td class="table-success"><?php echo e($SujetoObligado->hora); ?></td>

                        <td class="table-success">
                            <a href="<?php echo e(route('SujetosObligados.edit',$SujetoObligado->id_sujetos_obligados)); ?>" onclick="return confirm('¿Seguro que deseas modificarlo?')" class="btn btn-outline-primary" name="actualizar"><i  class="fas fa-pen-alt"></i></a>
                        </td>
                        <td class="table-success">
                            <a href="<?php echo e(route('SujetosObligados.destroy',$SujetoObligado->id_sujetos_obligados)); ?>" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-outline-danger" name="eliminar"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Laravel/Protected_File/resources/views/SujetosObligados/index.blade.php ENDPATH**/ ?>