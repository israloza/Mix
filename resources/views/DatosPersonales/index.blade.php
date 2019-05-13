@extends('Administradores.index')
@section('title','Datos Personales')
@section('content')
    <h1 class="text-black-50 text-center">Datos Personales</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("DatosPersonales/create")}}">Agregar</a></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th class="table-active">Descripcion</th>
                <th class="table-active">Actualizar</th>
                <th class="table-active">Eliminar</th>
                </thead>
                <tbody>
                @foreach($DatosPersonales as $DatoPersonal)
                    <tr>
                        <td class="table-success">{{$DatoPersonal->descripcion}}</td>

                        <td class="table-success">
                            <a href="{{route('DatosPersonales.edit',$DatoPersonal->id_datos_personales)}}" onclick="return confirm('¿Seguro que deseas modificarlo?')" class="btn btn-outline-primary" name="actualizar"><i  class="fas fa-pen-alt"></i></a>
                        </td>
                        <td class="table-success">
                            <a href="{{route('DatosPersonales.destroy',$DatoPersonal->id_datos_personales)}}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-outline-danger" name="eliminar"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

