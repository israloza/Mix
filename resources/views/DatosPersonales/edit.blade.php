@extends('Template.template')
@section('title','Editar Datos Personales')
@section('content')
    <h1 class="bg-primary text-dark text-left">Editar Datos Personales {{$DatosPersonal->descripcion}}</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("DatosPersonales")}}">Volver</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{route("DatosPersonales.update",$DatosPersonal->id_datos_personales)}}">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="exampleInputPassword1">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" value='{{$DatosPersonal->descripcion}}'>


                </div>
                <button type="submit" class="btn-primary">Editar</button>
            </form>
        </div>
    </div>

@endsection
