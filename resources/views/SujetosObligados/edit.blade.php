@extends('Template.template')
@section('title','Editar Sujetos Obligados ')
@section('content')
    <h1 class="bg-primary text-dark text-left">Editar Sujetos Obligados {{$SujetosObligado->lugar}}</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("SujetosObligados")}}">Volver</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{route("SujetosObligados.update",$SujetosObligado->id_sujetos_obligados)}}">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="exampleInputPassword1">Lugar</label>
                    <input type="text" class="form-control" name="lugar" value='{{$SujetosObligado->lugar}}'>

                    <label for="exampleInputPassword1">Fecha</label>
                    <input type="text" class="form-control" name="fecha" value='{{$SujetosObligado->fecha}}'>

                    <label for="exampleInputPassword1">Hora</label>
                    <input type="text" class="form-control" name="hora" value='{{$SujetosObligado->Hora}}'>

                </div>
                <button type="submit" class="btn-primary">Editar</button>
            </form>
        </div>
    </div>

@endsection
