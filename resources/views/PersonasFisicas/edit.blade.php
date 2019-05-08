@extends('Template.template')
@section('title','Editar Personas Físicas ')
@section('content')
    <h1 class="bg-primary text-dark text-left">Editar Personas Fisicas {{$PersonasFisica->nombre}}</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("PersonasFisicas")}}">Volver</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{route("PersonasFisicas.update",$PersonasFisica->id_personas_fisicas)}}">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="exampleInputPassword1">Apellido Paterno</label>
                    <input type="text" class="form-control" name="ap" value='{{$PersonasFisica->ap}}'>
                    <label for="exampleInputPassword2">Apelllido Materno</label>
                    <input type="text" class="form-control" name="am" value='{{$PersonasFisica->am}}'>
                    <label for="exampleInputPassword3">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value='{{$PersonasFisica->nombre}}'>

                </div>
                <button type="submit" class="btn-primary">Editar</button>
            </form>
        </div>
    </div>

@endsection
