@extends('Template.template')
@section('title','Municipios')
@section('content')
    <h1 class="bg-success text-white text-center">Municipios</h1>
    <div class="row">
        <div class="col"><a class="btn-success" href="{{url("Municipios/create")}}">Agregar</a></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>Descripción</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
                </thead>
                <tbody>
                @foreach($Municipios as $Municipio)
                    <tr>
                        <td class="table-success">{{$Municipio->descripcion}}</td>

                        <td class="table-success">
                            <a href="{{route('Municipios.edit',$Municipio->id_municipios)}}" onclick="return confirm('¿Seguro que deseas modificarlo?')" class="btn btn-outline-primary" name="actualizar"><i  class="fas fa-pen-alt"></i></a>
                        </td>
                        <td class="table-success">
                            <a href="{{route('Municipios.destroy',$Municipio->id_municipios)}}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-outline-danger" name="eliminar"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
