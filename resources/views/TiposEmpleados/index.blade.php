@extends('Administradores.index')
@section('title','Tipos Empleados')
@section('content')
    <h1 class="text-black-50 text-center">Tipos Empleados</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("TiposEmpleados/create")}}">Agregar</a></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>

                <th class="table-active">Descripción</th>
                <th class="table-active">Actualizar</th>
                <th class="table-active">Eliminar</th>
                </thead>
                <tbody>
                @foreach($TiposEmpleados as $TipoEmpleado)
                    <tr>

                        <td class="table-success">{{$TipoEmpleado->descripcion}}</td>
                        <td class="table-success">
                            <a href="{{route('TiposEmpleados.edit',$TipoEmpleado->id_tipo_empleado)}}" onclick="return confirm('¿Seguro que deseas modificarlo?')" class="btn btn-outline-primary" name="actualizar"><i  class="fas fa-pen-alt"></i></a>
                        </td>
                        <td class="table-success">
                            <a href="{{route('TiposEmpleados.destroy',$TipoEmpleado->id_tipo_empleado)}}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-outline-danger" name="eliminar"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
