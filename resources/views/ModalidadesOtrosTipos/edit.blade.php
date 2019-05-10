@extends('Template.template')
@section('title','Editar Modalidades Otros Tipos')
@section('content')
    <h1 class="bg-primary text-dark text-left">Modalidades Otros Tipos {{$ModalidadesOtroTipo->descripcion}}</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("ModalidadesOtrosTipos")}}">Volver</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{route("ModalidadesOtrosTipos.update",$ModalidadesOtroTipo->id_modalidades_otros_tipos)}}">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="exampleInputPassword1">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" value='{{$ModalidadesOtroTipo->descripcion}}'>


                </div>
                <button type="submit" class="btn-primary">Editar</button>
            </form>
        </div>
    </div>

@endsection
