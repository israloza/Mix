@extends('Template.template')
@section('title','Editar Municipios ')
@section('content')
    <h1 class="bg-primary text-dark text-left">Editar Municipios {{$Municipio->descripcion}}</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("Municipios")}}">Volver</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{route("Municipios.update",$Municipio->id_municipios)}}">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="exampleInputPassword1">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" value='{{$Municipio->descripcion}}'>


                </div>
                <button type="submit" class="btn-primary">Editar</button>
            </form>
        </div>
    </div>

@endsection
