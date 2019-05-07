@extends('Template.template')
@section('title','Añadir Municipios')
@section('content')

    <h1 class="bg-primary text-dark text-left">Añadir Municipios</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("Municipios")}}">Volver</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{url("Municipios")}}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputPassword1">Descripción</label>
                    <input type="text" class="form-control" name="descripcion" placeholder="Descripción">
                </div>
                <button type="submit" class="btn-primary">Aceptar</button>
            </form>
        </div>
    </div>

@endsection
