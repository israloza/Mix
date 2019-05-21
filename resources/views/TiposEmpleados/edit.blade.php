@extends('Template.template')
@section('title','Editar Tipos Empleados ')
@section('content')
    <h1 class="bg-primary text-dark text-left">Editar Tipos Empleados {{$TipoEmpleado->descripcion}}</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("TiposEmpleados")}}">Volver</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{route("TiposEmpleados.update",$TipoEmpleado->id_tipo_empleado)}}">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="exampleInputPassword1">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" value='{{$TipoEmpleado->descripcion}}'>


                </div>
                <button type="submit" class="btn-primary">Editar</button>
            </form>
        </div>
    </div>

@endsection
