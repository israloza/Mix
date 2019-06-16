@extends('Template.template')
@section('title','Añadir Informaciones Solicitadas')
@section('content')

    <h1 class="bg-success text-dark text-left">Añadir Informacion Solicitada</h1>
    <div class="row">
        <div class="col"><a class="btn-success" href="{{url("InformacionesSolicitadas")}}">Volver</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{url("InformacionesSolicitadas")}}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputPassword1">Descripción</label>
                    <input type="text" class="form-control" name="descripcion" placeholder="Descripción">
                </div>
                <button type="submit" class="btn-success">Aceptar</button>
            </form>
        </div>
    </div>

@endsection
