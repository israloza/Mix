@extends('Template.template')
@section('title','Editar Modalidades Entregas ')
@section('content')
    <h1 class=btn-success text-dark text-left">Editar Modalidades Entregas {{$ModalidadEntrega->descripcion}}</h1>
    <div class="row">
        <div class="col"><a class="btn-success" href="{{url("ModalidadesEntrega")}}">Volver</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{route("ModalidadesEntrega.update",$ModalidadEntrega->id_modalidades_entregas)}}">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="exampleInputPassword1">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" value='{{$ModalidadEntrega->descripcion}}'>


                </div>
                <button type="submit" class="btn-success">Editar</button>
            </form>
        </div>
    </div>

@endsection
