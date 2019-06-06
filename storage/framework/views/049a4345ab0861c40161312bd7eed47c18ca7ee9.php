<?php $__env->startSection('title','Modalidades Entregas'); ?>
<?php $__env->startSection('content'); ?>
    <h1 class="bg-primary text-white text-center">Modalidades Entregas</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="<?php echo e(url("ModalidadesEntrega/create")); ?>">Agregar</a></div>
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
                <?php $__currentLoopData = $ModalidadesEntrega; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ModalidadEntrega): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="table-success"><?php echo e($ModalidadEntrega->descripcion); ?></td>

                        <td class="table-success">
                            <a href="<?php echo e(route('ModalidadesEntrega.edit',$ModalidadEntrega->id_modalidades_entregas)); ?>" onclick="return confirm('¿Seguro que deseas modificarlo?')" class="btn btn-outline-primary" name="actualizar"><i  class="fas fa-pen-alt"></i></a>
                        </td>
                        <td class="table-success">
                            <a href="<?php echo e(route('ModalidadesEntrega.destroy',$ModalidadEntrega->id_modalidades_entregas)); ?>" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-outline-danger" name="eliminar"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ara/Documentos/Proyecto/Protected-File/resources/views/ModalidadesEntrega/index.blade.php ENDPATH**/ ?>