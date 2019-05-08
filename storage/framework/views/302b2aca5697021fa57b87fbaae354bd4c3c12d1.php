<?php $__env->startSection('title','Administrador'); ?>
<?php $__env->startSection('content'); ?>
<header>
    <h1 class="bg-primary text-white text-center">Administrador</h1>
    <div class="row">
        <div class="col-12">
        <ul class="nav justify-content-center">
            <li class="nav-item"><a href="<?php echo e(url("PersonasFisicas")); ?>" class="nav-link text-right text-black-50">Personas Fisicas</a></li>
            <li class="nav-item"><a href="<?php echo e(url("PersonasMorales")); ?>" class="nav-link text-black-50">Personas Morales</a></li>
            <li class="nav-item"><a href="<?php echo e(url("Municipios")); ?>" class="nav-link text-black-50">Municipios</a></li>
            <li class="nav-item"><a href="<?php echo e(url("Logins")); ?>" class="nav-link text-black-50">Login</a></li>
            <li class="nav-item"><a href="<?php echo e(url("InformacionesSolicitadas")); ?>" class="nav-link text-black-50">Informacion Solicitada</a></li>
            <li class="nav-item"><a href="<?php echo e(url("SujetosObligados")); ?>" class="nav-link text-black-50">Sujetos Obligados</a></li>
            <li class="nav-item"><a href="<?php echo e(url("ModalidadesEntrega")); ?>" class="nav-link text-black-50">Modalidad Entrega</a></li>
            <li class="nav-item"><a href="<?php echo e(url("DatosPersonales")); ?>" class="nav-link text-black-50">Datos Personales</a></li>
            <li class="nav-item"><a href="<?php echo e(url("ModalidadesOtrosTipos")); ?>" class="nav-link text-black-50">Modalidades otros tipos</a></li>
        </ul>
        </div>
    </div>
</header>
    <section class="container">
        <?php echo $__env->yieldContent("content"); ?>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Laravel/Protected_File/resources/views/Administradores/index.blade.php ENDPATH**/ ?>