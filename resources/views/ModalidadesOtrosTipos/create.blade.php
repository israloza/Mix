@extends('Template.template')
@section('title','Añadir Modalidades Otros Tipos')
@section('content')

    <h1 class="bg-primary text-dark text-left">Añadir Modalidades Otros Tipos</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("ModalidadesOtrosTipos")}}">Volver</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{url("ModalidadesOtrosTipos")}}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputPassword1">Descripción</label>
                    <input type="text" class="form-control" name="descrpcion" placeholder="Descripción">


                </div>
                <button type="submit" class="btn-primary">Aceptar</button>
            </form>
        </div>
    </div>

@endsection
