@extends('Template.template')
@section('title','Añadir Tipos Empleados')
@section('content')

    <h1 class="bg-primary text-dark text-left">Añadir Tipos Empleados</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("TiposEmpleados")}}">Volver</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{url("TiposEmpleados")}}">
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
