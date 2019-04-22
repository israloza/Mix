<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css" type="text/css">
    <title>Protected File</title><!--titulo de la pestaña-->

</head>
<body>
    <style>
        #encabezado{
            background-color: lightgrey;
            top:0;

        }
        #logo{
            width: 400px;


        }
        #titulo_encabezado{
            position: fixed;/*tipo de posicionamiento*/
            top:50px;/*Posicionamiento hacia abajo*/
            left: 500px;/*Posicionamiento a la derecha*/
            font-size: 80px;/*Tamaño de la letra*/
            line-height: 0px;/*altura de cada linea*/
            color: darkgreen;/*Color*/
            font-family: 'Georgia';/*Tipo de letra*/



        }
        #pie{
            position: fixed;/*tipo de posicionamiento*/
            top:530px;
            background-color: lightgray;

         }
        #titulo_pie_pagina{
            font-size: 30px;
            text-align: center;
            color: black;

        }
        #cuerpo_pie_pagina{
            text-align: center;
            color: darkslategray;
        }
    </style>
    <header id="encabezado"><!--encabezado-->
        <img id="logo" src="Imagenes/tesvb.png" alt="" ><!--Usar imagenes-->
        <h1 id="titulo_encabezado">Protected File</h1><!--Titulo del encabezado-->
    </header>
    <footer id="pie"><!--Pie de página-->
    <h1 id="titulo_pie_pagina">Contacto</h1>
        <h3 id="cuerpo_pie_pagina">Dirección Km.30 de la Carretera Federal Monumento-Valle de Bravo
        , Ejido de San Antonio de la Laguna, Valle de Bravo C.P 51200</h3>
    </footer>
</body>
</html>