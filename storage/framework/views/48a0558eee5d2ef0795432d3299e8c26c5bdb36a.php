<?php $__env->startSection('title','Añadir Sujetos Obligados'); ?>
<?php $__env->startSection('content'); ?>

    <h1 class="bg-primary text-dark text-left">Añadir Sujetos Obligados</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="<?php echo e(url("SujetosObligados")); ?>">Volver</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="<?php echo e(url("SujetosObligados")); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="exampleInputPassword1">Lugar</label>
                    <input type="text" class="form-control" name="lugar" placeholder="Lugar">
                    <label for="exampleInputPassword2">Fecha</label>
                    <input type="text" class="form-control" name="fecha" placeholder="Fecha">
                    <label for="exampleInputPassword3">Hora</label>
                    <input type="text" class="form-control" name="hora" placeholder="Hora">

                </div>
                <button type="submit" class="btn-primary">Aceptar</button>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Laravel/Protected_File/resources/views/SujetosObligados/create.blade.php ENDPATH**/ ?>