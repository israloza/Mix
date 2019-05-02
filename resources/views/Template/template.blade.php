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
        <img id="logo" src={{asset("Imagenes/tesvb.png")}} alt="" ><!--Usar imagenes-->
        <h1 id="titulo_encabezado">Protected File</h1><!--Titulo del encabezado-->
        <ul class="nav justify-content-end">
            <li class="nav-item"><a href="{{url("Administradores")}}" class="nav-link text-right text-black-50">Administrador</a></li>
        </ul>
    </header>
    <section class="container">
        @yield("content")
    </section>
    <footer id="pie">
    <h1 id="titulo_pie_pagina">Contacto</h1>
        <h3 id="cuerpo_pie_pagina">Dirección Km.30 de la Carretera Federal Monumento-Valle de Bravo
        , Ejido de San Antonio de la Laguna, Valle de Bravo C.P 51200</h3>
    </footer>
</body>
</html>