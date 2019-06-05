@extends('Template.template')
@section('title','Añadir Personas Físicas')
@section('content')

    <h1 class="bg-success text-white text-left">Formato de Solicitud de Información Pública</h1>
    <div class="row">
        <div class="col"><a class="btn-success" href="{{url("Solicitudes")}}">Volver</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{url("Solicitudes")}}">
                @csrf
                <div class="form-group">
                    <h1>Recepción</h1>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Lugar</label>
                        <input type="text" class="form-control" name="Lugar" placeholder="Lugar">
                        <label for="exampleInputPassword1">Fecha</label>
                        <input type="text" class="form-control" name="Fecha" placeholder="aaaa/mm/dd">
                        <label for="exampleInputPassword1">Hora</label>
                        <input type="text" class="form-control" name="hora" placeholder="hh:mm">
                    </div>
                    <h1>Datos del Solicitante</h1>
                    <h2>Persona Física</h2>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Apellido Paterno</label>
                        <input type="text" class="form-control" name="ap" placeholder="Apellido Paterno">
                        <label for="exampleInputPassword2">Apelllido Materno</label>
                        <input type="text" class="form-control" name="am" placeholder="Apellido Materno">
                        <label for="exampleInputPassword3">Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre">

                    </div>
                    <h3>Datos opcionales</h3>
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
                    <h2>Persona Moral</h2>
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
                    <h2>Domicilio</h2>
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
                    <h2>Sujeto Obligado al que Solicita la Información</h2>
                    <div class="form-group">
                        <input type="text" class="form-control" name="sujeto_obligado"
                               placeholder="Sujeto obligado">
                    </div>
                    <h1>Información Solicitada</h1>
                    <h2>Descripción Clara y Precisa de la Información que Solicita</h2>
                    <div class="form-group">
                        <input type="text" class="form-control" name="descripcion"
                               placeholder="descripcion">
                    </div>
                    <h2>Cualquier otro detalle que facilite la búsqueda de la información</h2>
                    <div class="form-group">
                        <input type="text" class="form-control" name="detalle"
                               placeholder="detalle">
                    </div>
                    <h2>Modalidades Entrega</h2>
                    <div class="form-group">
                        Aquí van las opciones de modalidades entrega y modalidades no entrega
                    </div>
                    <h2>Documentos Anexos</h2>
                    <div class="form-group">
                        Aquí van las documentos
                    </div>
                    <h2>Nombre del solicitante</h2>
                    <div class="form-group">
                        Aquí se obtiene el antes escrito nombre.
                    </div>
                    <h2>Fecha de solicitud</h2>
                    <div class="form-group">
                        Se obtiene la fecha antes ingresada.
                    </div>
                </div>
                <button type="submit" class="btn-success">Aceptar</button>
            </form>
        </div>
    </div>

@endsection
