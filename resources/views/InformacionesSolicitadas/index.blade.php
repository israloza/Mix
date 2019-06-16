@extends('Template.template')
@section('title','Informaciones Solicitadas')
@section('content')
    <h1 class="bg-success text-white text-center">Informaciones Solicitadas</h1>
    <div class="row">
        <div class="col"><a class="btn-success" href="{{url("InformacionesSolicitadas/create")}}">Agregar</a></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>Informacion</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
                </thead>
                <tbody>
                @foreach($InformacionesSolicitadas as $InformacionSolicitada)
                    <tr>
                        <td class="table-success">{{$InformacionSolicitada->descripcion}}</td>

                        <td class="table-success">
                            <a href="{{route('InformacionesSolicitadas.edit',$InformacionSolicitada->id_informaciones_solicitadas)}}" onclick="return confirm('¿Seguro que deseas modificarlo?')" class="btn btn-outline-primary" name="actualizar"><i  class="fas fa-pen-alt"></i></a>
                        </td>
                        <td class="table-success">
                            <a href="{{route('InformacionesSolicitadas.destroy',$InformacionSolicitada->id_informaciones_solicitadas)}}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-outline-danger" name="eliminar"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

