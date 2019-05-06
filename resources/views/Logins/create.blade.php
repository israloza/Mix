@extends('Template.template')
@section('title','Añadir Logins')
@section('content')

    <h1 class="bg-primary text-dark text-left">Añadir Logins</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("Logins")}}">Volver</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{url("Logins")}}">
                @csrf
                <div class="form-group">

                    <label for="exampleInputPassword3">Nombre</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre">

                    <label for="exampleInputPassword1">Apellido Paterno</label>
                    <input type="text" class="form-control" name="ap" placeholder="Apellido Paterno">

                    <label for="exampleInputPassword2">Apelllido Materno</label>
                    <input type="text" class="form-control" name="am" placeholder="Apellido Materno">

                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="text" class="form-control" name="contraseña" placeholder="Contraseña">

                    <label for="exampleInputPassword1">Correo</label>
                    <input type="text" class="form-control" name="correo" placeholder="Correo">

                </div>
                <button type="submit" class="btn-primary">Aceptar</button>
            </form>
        </div>
    </div>

@endsection
