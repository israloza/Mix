<?php $__env->startSection('title','Añadir Personas Morales'); ?>
<?php $__env->startSection('content'); ?>

    <h1 class="bg-primary text-dark text-left">Añadir Personas Morales</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="<?php echo e(url("PersonasMorales")); ?>">Volver</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="<?php echo e(url("PersonasMorales")); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="exampleInputPassword1">Razon o Denominación Social</label>
                    <input type="text" class="form-control" name="razon_den_social" placeholder="Razón o denominación social">
                    <label for="exampleInputPassword2">Apelllido Paterno</label>
                    <input type="text" class="form-control" name="ap_rep" placeholder="Apellido Paterno">
                    <label for="exampleInputPassword3">Apelllido Materno</label>
                    <input type="text" class="form-control" name="am_rep" placeholder="Apellido Materno">
                    <label for="exampleInputPassword4">Nombre</label>
                    <input type="text" class="form-control" name="nom_rep" placeholder="Nombre">
                </div>
                <button type="submit" class="btn-primary">Aceptar</button>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ara/Documentos/Proyecto/Protected-File/resources/views/PersonasMorales/create.blade.php ENDPATH**/ ?>