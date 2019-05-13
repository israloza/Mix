<?php $__env->startSection('title','Editar Sujetos Obligados '); ?>
<?php $__env->startSection('content'); ?>
    <h1 class="bg-primary text-dark text-left">Editar Sujetos Obligados <?php echo e($SujetosObligado->lugar); ?></h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="<?php echo e(url("SujetosObligados")); ?>">Volver</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="<?php echo e(route("SujetosObligados.update",$SujetosObligado->id_sujetos_obligados)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field("PUT"); ?>
                <div class="form-group">
                    <label for="exampleInputPassword1">Lugar</label>
                    <input type="text" class="form-control" name="lugar" value='<?php echo e($SujetosObligado->lugar); ?>'>

                    <label for="exampleInputPassword1">Fecha</label>
                    <input type="text" class="form-control" name="fecha" value='<?php echo e($SujetosObligado->fecha); ?>'>

                    <label for="exampleInputPassword1">Hora</label>
                    <input type="text" class="form-control" name="hora" value='<?php echo e($SujetosObligado->Hora); ?>'>

                </div>
                <button type="submit" class="btn-primary">Editar</button>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Laravel/Protected_File/resources/views/SujetosObligados/edit.blade.php ENDPATH**/ ?>