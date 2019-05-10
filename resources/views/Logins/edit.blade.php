@extends('Template.template')
@section('title','Editar Logins')
@section('content')
    <h1 class="bg-primary text-dark text-left">Editar Logins {{$Login->nombre}}</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("Logins")}}">Volver</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{route("Logins.update",$Login->id_login)}}">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="exampleInputPassword1">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value='{{$Login->nombre}}'>

                    <label for="exampleInputPassword1">Apellido Paterno</label>
                    <input type="text" class="form-control" name="ap" value='{{$Login->ap}}'>

                    <label for="exampleInputPassword1">Apellido Materno</label>
                    <input type="text" class="form-control" name="am" value='{{$Login->am}}'>

                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="text" class="form-control" name="contraseña" value='{{$Login->contraseña}}'>

                    <label for="exampleInputPassword1">Correo Electronico</label>
                    <input type="text" class="form-control" name="correo" value='{{$Login->correo}}'>

                </div>
                <button type="submit" class="btn-primary">Editar</button>
            </form>
        </div>
    </div>

@endsection
