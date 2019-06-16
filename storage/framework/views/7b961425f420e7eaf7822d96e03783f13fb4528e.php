<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=<?php echo e(asset("css/app.css")); ?> type="text/css">
    <link rel="stylesheet" href=<?php echo e(asset("css/Estilos.css")); ?> type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <title>Protected File</title><!--titulo de la pestaña-->
    <title><?php echo $__env->yieldContent("title"); ?></title>
</head>
<body>
    <header class="fixed-top bg-success">
        <div class="row">
            <div class="col-md-3">
                <img  id="logo" class="img-fluid" src=<?php echo e(asset("Imagenes/tesvb.png")); ?> alt="" ><!--Usar imagenes-->
            </div>
            <div class="col-md-7">
                <br><br>
                <h6 class="text-center " id="titulo_encabezado">Plataforma para la protección y gestión de datos personales de servidores publicos e instituciones educativa </h6><!--Titulo del encabezado-->
            </div>
            <div class="col-md-2 text-center">
                <img  id="user" src=<?php echo e(asset("Imagenes/login.png")); ?> alt="" ><!--Usar imagenes-->
           <!-- <button id="boton" href="" class="btn btn-outline-danger" name="eliminar"><i class="fas fa-minus-circle"></i></button> -->
            <div id="boton" class="col-12"><a class="btn-secondary" href="<?php echo e(url("Administradores")); ?>">Administrador</a></div></div>
        </div>
        <ul class="nav justify-content-center">
                <?php if(auth()->guard()->guest()): ?>
            <li class="nav-item">
                <a class="nav-link text-black-50" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
            </li>
        <?php if(Route::has('register')): ?>
            <li class="nav-item">
                <a class="nav-link text-black-50" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
            </li>
         <?php endif; ?>
        <?php else: ?>
            <?php if(Auth::user()->id_tipo_empleado==0 || Auth::user()->tipo_empleado==1): ?>
                        <li class="nav-item"><a href="<?php echo e(url("Solicitudes")); ?>" class="nav-link text-black-50">Solicitudes</a></li>
                        <li class="nav-item"><a href="<?php echo e(url("DatosPersonales")); ?>" class="nav-link text-black-50">Datos Personales</a></li>
                        <li class="nav-item"><a href="<?php echo e(url("ModalidadesOtrosTipos")); ?>" class="nav-link text-black-50">Modalidades otros tipos</a></li>
          <?php endif; ?>
            <?php if(Auth::user()->id_tipo_empleado==2): ?>
                    <li class="nav-item"><a href="<?php echo e(url("PersonasFisicas")); ?>" class="nav-link text-right text-black-50">Personas Fisicas</a></li>
                    <li class="nav-item"><a href="<?php echo e(url("PersonasMorales")); ?>" class="nav-link text-black-50">Personas Morales</a></li>
                    <li class="nav-item"><a href="<?php echo e(url("Municipios")); ?>" class="nav-link text-black-50">Municipios</a></li>
                    <li class="nav-item"><a href="<?php echo e(url("Personas")); ?>" class="nav-link text-black-50">Personas</a></li>
                    <li class="nav-item"><a href="<?php echo e(url("InformacionesSolicitadas")); ?>" class="nav-link text-black-50">Informacion Solicitada</a></li>
                    <li class="nav-item"><a href="<?php echo e(url("SujetosObligados")); ?>" class="nav-link text-black-50">Sujetos Obligados</a></li>
                    <li class="nav-item"><a href="<?php echo e(url("TiposEmpleados")); ?>" class="nav-link text-black-50">Tipos Empleados</a></li>
            <?php endif; ?>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-black-50  " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <?php echo e(__('Logout')); ?>

                        </a>

                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                </li>
                <?php endif; ?>
            </ul>
</header>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section class="container my-5">
        <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent("content"); ?>
        <?php if(auth()->guard()->guest()): ?>
            <h1 class="bg-danger text-white">No has iniciado sesion</h1>
        <?php endif; ?>
    </section>

    <!--<footer id="pie" class="col-12">

        <div id="Gobierno">
            <p>Gobierno del Estado de México<br>Secretaría de Educación
            <br>Tecnológico de Estudios Superiores de Valle de Bravo</p>
            <div>
               <p>  Valle de Bravo C.P 51200<br>Teléfono: 01 726 266 5077
               <br>E-mail: direcciontesvalle@gmail.com</p>
            </div>


        </div>

        <div id="tesvb">
            Dirección Km.30 de la Carretera Federal Monumento-Valle de Bravo
            , Ejido de San Antonio de la Laguna, Valle de Bravo C.P 51200
        </div>
        <div id="derechos">
            © 2019 Todos los Derechos Reservados
        </div>
        <div>

        </div>
    </footer>-->
</body>
</html>

<?php /**PATH /var/www/html/Laravel/Protected_File/resources/views/Template/template.blade.php ENDPATH**/ ?>