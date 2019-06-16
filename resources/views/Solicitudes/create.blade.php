@extends('Template.template')
@section('title','Añadir Personas Físicas')
@section('content')

    <link rel="stylesheet" href={{asset("css/app.css")}} type="text/css">
    <link rel="stylesheet" href={{asset("css/Estilos.css")}} type="text/css">

    <h3 class="bg-success text-black-50 text-center">FORMATO DE SOLICITUD DE INFORMACIÓN PUBLICA</h3>
    <div class="row">
        <div class="col"><a class="btn-success-1 " href="{{url("Solicitudes")}}">Volver</a></div>
    </div>
    <div class="row">

        {{--<div class="col-4 offset-4">--}}
            <div class="col-sm">
            <form method="post" action="{{url("Solicitudes")}}">
                @csrf




                <div id="borde1">
                <div class="recepcion">
                    <h5>RECEPCION</h5>
                </div>
                </div>

                   <div id="borde2">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Lugar</label>
                        <input type="text" class="form-control" name="Lugar" placeholder="Lugar">
                        <label for="exampleInputPassword1">Fecha</label>
                        <input type="text" class="form-control" name="Fecha" placeholder="aaaa/mm/dd">
                        <label for="exampleInputPassword1">Hora</label>
                        <input type="text" class="form-control" name="hora" placeholder="hh:mm">
                    </div>
                   </div>
    <br>

                    <div id="borde1">
                    <div class="datosol">
                    <h5>DATOS DEL SOLICITANTE</h5>
                    </div>
                    </div>
    <br>

                        <div id="bordeesquinita">
                    <h6>PERSONA FISICA</h6>
                        </div>
                            <div id="borde2">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Apellido Paterno</label>
                        <input type="text" class="form-control" name="ap" placeholder="Apellido Paterno">
                        <label for="exampleInputPassword2">Apelllido Materno</label>
                        <input type="text" class="form-control" name="am" placeholder="Apellido Materno">
                        <label for="exampleInputPassword3">Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre">

                    </div>


                    <div class="datosopc">
                    <h5>DATOS OPCIONALES</h5>
                    </div>
                        <h7 class="text-left ">Información utilizada unicamente para fines estadisticos</h7>
                    <div class="form-group">
                        <label for="exampleInputPassword1">RFC</label>
                        <input type="text" class="form-control" name="rfc" placeholder="RFC">
                        <label for="exampleInputPassword2">Curp</label>
                        <input type="text" class="form-control" name="curp" placeholder="Curp">
                        <label for="exampleInputPassword3">Sexo</label>
                        <input type="text" class="form-control" name="sexo" placeholder="sexo">
                        <label for="exampleInputPassword1">Fecha de nacimiento</label>
                        <input type="text" class="form-control" name="fecha_nac" placeholder="aaaa/mm/dd">

                        <label for="exampleInputPassword1">Ocupación</label>
                        <input type="text" class="form-control" name="ocupacion" placeholder="ocupación">
                    </div>
                    </div>
    <br>

                    <div id="bordeesquinita">
                    <h6>PERSONA MORAL</h6>
                    </div>
                    <div id="borde2">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Razon o Denominación Social</label>
                        <input type="text" class="form-control" name="razon_den_social"
                               placeholder="Razón o denominación social">
                        <label for="exampleInputPassword2">Apelllido Paterno</label>
                        <input type="text" class="form-control" name="ap_rep" placeholder="Apellido Paterno">
                        <label for="exampleInputPassword3">Apelllido Materno</label>
                        <input type="text" class="form-control" name="am_rep" placeholder="Apellido Materno">
                        <label for="exampleInputPassword4">Nombre</label>
                        <input type="text" class="form-control" name="nom_rep" placeholder="Nombre">
                    </div>
                    </div>
<br>
                    <div id="bordeesquinita">
                    <h6>DOMICILIO</h6>
                        </div>
                    <div id="borde2">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Calle</label>
                        <input type="text" class="form-control" name="Calle" placeholder="Calle">
                        <label for="exampleInputPassword2">Numero Exterior</label>
                        <input type="text" class="form-control" name="no_exterior" placeholder="Número Exterior">
                        <label for="exampleInputPassword2">Numero Interior</label>
                        <input type="text" class="form-control" name="no_interior" placeholder="Número Interior">
                        <label for="exampleInputPassword3">Entidad Federativa</label>
                        <input type="text" class="form-control" name="entidad_Federativa"
                               placeholder="Entidad_Federativa">
                        <label for="exampleInputPassword4">Municipio</label>
                        <input type="text" class="form-control" name="municipio" placeholder="Municipio">
                        <label for="exampleInputPassword4">Código Postal</label>
                        <input type="text" class="form-control" name="cp" placeholder="Código Postal">
                        <label for="exampleInputPassword4">Colonia o Localidad</label>
                        <input type="text" class="form-control" name="colonia_o_localidad"
                               placeholder="Colonia o Localidad">
                        <label for="exampleInputPassword4">Telefono</label>
                        <input type="text" class="form-control" name="telefono" placeholder="Lada + Telefono">
                    </div>
                    </div>
<br>
                    <div id="bordeesquinitasujobli">
                    <h6>SUJETO OBLIGADO AL QUE SOLICITA LA INFORMACION:</h6>
                    </div>
                <div id="borde2">
                    <div class="form-group">
                        <input type="text" class="form-control" name="sujeto_obligado"
                               placeholder="Sujeto obligado">
                    </div>
                    </div>
<br>
                     <div id="borde1">
                         <div class="datosol">
                    <h5>INFORMACION SOLICITADA</h5>
                         </div>
                     </div>
    <br>
                    <div id="bordeesquinitadescripclara">
                    <h6>DESCRIPCIÓN CLARA Y PRECISA DE LA INFORMACIÓN QUE SOLICITA:</h6>
                        </div>
                    <div id="borde2">
                    <div class="form-group">
                        <input type="text" class="form-control" name="descripcion"
                               placeholder="descripcion">
                    </div>
                    </div>
    <br>
                    <div id="bordeesquinitacualquier">
                    <h6>CUALQUIER OTRO DETALLE QUE FACILITE LA BUSQUEDA DE INFORMACIÓN:</h6>
                    </div>
                    <div id="borde2">
                    <div class="form-group">
                        <input type="text" class="form-control" name="detalle"
                               placeholder="detalle">
                    </div>
                    </div>
    <br>
                    <div id="bordeesquinitamodent">
                    <h6>MODALIDAD ENTREGA:</h6>
                    </div>
                    <div id="borde2">
                    <div class="form-group">
                        Aquí van las opciones de modalidades entrega y modalidades no entrega
                    </div>
                    </div>
    <br>
                    <div id="bordeesquinitamodent">
                    <h6>DOCUMENTOS ANEXOS:</h6>
                    </div>
                    <div id="borde2">
                    <div class="form-group">
                        Aquí van las documentos
                    </div>
                    </div>
    <br>
                    <div id="borde2">
                        <div class="firma">
                    <h5>NOMBRE DEL SOLICITANTE</h5>
                        </div>
                    </div>

                    <div id="borde2">
                    <div class="form-group">
                        Aquí se obtiene el antes escrito nombre.
                    </div>
                    </div>
    <br>
                    <div id="borde2">
                    <div class="firma">
                    <h5>FECHA DE SOLICITUD</h5>
                    </div>
                    </div>

                    <div id="borde2">
                    <div class="form-group">
                        Se obtiene la fecha antes ingresada.
                    </div>
                    </div>
<br>


                    <div id="borde2">
                    <p><br><br><br></p>
                    </div>
                    <div class="firma">
                        <h5>FIRMA O HUELLA <br> PROTESTO LO NECESARIO</h5>
                    </div>

                <center><button type="submit" class="btn-success">Aceptar</button></center>
            </form>
        </div>
    </div>


@endsection
