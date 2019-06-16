<?php $__env->startSection('title','Modalidades Otros Tipos'); ?>
<?php $__env->startSection('content'); ?>
    <h1 class="bg-primary text-white text-center">Modalidades Otros Tipos</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="<?php echo e(url("ModalidadesOtrosTipos/create")); ?>">Agregar</a></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>Descripción</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
                </thead>
                <tbody>
                <?php $__currentLoopData = $ModalidadesOtrosTipos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ModaliadOtroTipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="table-success"><?php echo e($ModaliadOtroTipo->descripcion); ?></td>

                        <td class="table-success">
                            <a href="<?php echo e(route('ModalidadesOtrosTipos.edit',$ModaliadOtroTipo->id_modalidades_otros_tipos)); ?>" onclick="return confirm('¿Seguro que deseas modificarlo?')" class="btn btn-outline-primary" name="actualizar"><i  class="fas fa-pen-alt"></i></a>
                        </td>
                        <td class="table-success">
                            <a href="<?php echo e(route('ModalidadesOtrosTipos.destroy',$ModaliadOtroTipo->id_modalidades_otros_tipos)); ?>" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-outline-danger" name="eliminar"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ara/Documentos/Proyecto/Protected-File/resources/views/ModalidadesOtrosTipos/index.blade.php ENDPATH**/ ?>