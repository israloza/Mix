<?php $__env->startSection('title','Datos Personales'); ?>
<?php $__env->startSection('content'); ?>
    <h1 class="text-black-50 text-center">Datos Personales</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="<?php echo e(url("DatosPersonales/create")); ?>">Agregar</a></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th class="table-active">Descripcion</th>
                <th class="table-active">Actualizar</th>
                <th class="table-active">Eliminar</th>
                </thead>
                <tbody>
                <?php $__currentLoopData = $DatosPersonales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $DatoPersonal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="table-success"><?php echo e($DatoPersonal->descripcion); ?></td>

                        <td class="table-success">
                            <a href="<?php echo e(route('DatosPersonales.edit',$DatoPersonal->id_datos_personales)); ?>" onclick="return confirm('¿Seguro que deseas modificarlo?')" class="btn btn-outline-primary" name="actualizar"><i  class="fas fa-pen-alt"></i></a>
                        </td>
                        <td class="table-success">
                            <a href="<?php echo e(route('DatosPersonales.destroy',$DatoPersonal->id_datos_personales)); ?>" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-outline-danger" name="eliminar"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('Administradores.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ara/Documentos/Proyecto/Protected-File/resources/views/DatosPersonales/index.blade.php ENDPATH**/ ?>