<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{asset("css/app.css")}} type="text/css">
    <link rel="stylesheet" href={{asset("css/Estilos.css")}} type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Protected File</title><!--titulo de la pestaña-->
    <title>@yield("title")</title>
</head>
<body>

    <header id="encabezado"><!--encabezado-->

        <div class="col-3" id="logos">
            <img  id="logo" src={{asset("Imagenes/tesvb.png")}} alt="" ><!--Usar imagenes-->
        </div>

        <div class="col-6" id="titulos">
            <h6 class="text-center " id="titulo_encabezado">Plataforma para la protección y gestión de datos personales de servidores publicos e instituciones educativa </h6><!--Titulo del encabezado-->
        </div>

        <div id="logins" class="col-1">
            <img  id="user" src={{asset("Imagenes/login.png")}} alt="" ><!--Usar imagenes-->
           <!-- <button id="boton" href="" class="btn btn-outline-danger" name="eliminar"><i class="fas fa-minus-circle"></i></button> -->
            <div id="boton" class="col-12"><a class="btn-secondary" href="{{url("Administradores")}}">Administrador</a></div>


    </header>
    <section class="container">
        @yield("content")
    </section>
    <footer id="pie" class="col-12">

        <div id="contacto" class="text-center"> Contactos</div>

        <div id="cuerpo_pie_pagina">
            Dirección Km.30 de la Carretera Federal Monumento-Valle de Bravo
        , Ejido de San Antonio de la Laguna, Valle de Bravo C.P 51200
        </div>
        <div id="tesvb">
            TECNOLOGICO DE ESTUDIOS SUPERIORES DE VALLE DE BRAVO
        </div>
        <div>
            <span><i class="fab fa-facebook-f" href="https://es-la.facebook.com/public/Tesvb-Valle"></i></span>
            <span><i class="fab fa-twitter" href="https://twitter.com/TESVBOficial?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"></i></span>

        </div>
    </footer>
</body>
</html>
