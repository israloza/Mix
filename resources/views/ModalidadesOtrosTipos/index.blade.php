@extends('Template.template')
@section('title','Modalidades Otros Tipos')
@section('content')
    <h1 class="bg-primary text-white text-center">Modalidades Otros Tipos</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("ModalidadesOtrosTipos/create")}}">Agregar</a></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>Id Modalidad Otro Tipo</th>
                <th>Descripción</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
                </thead>
                <tbody>
                @foreach($ModalidadesOtrosTipos as $ModaliadOtroTipo)
                    <tr>
                        <td class="table-success">{{$ModaliadOtroTipo->id_modalidades_otros_tipos}}</td>
                        <td class="table-success">{{$ModaliadOtroTipo->descripcion}}</td>

                        <td class="table-success">
                            <a href="{{route('ModalidadesOtrosTipos.edit',$ModaliadOtroTipo->id_modalidades_otros_tipos)}}" onclick="return confirm('¿Seguro que deseas modificarlo?')" class="btn btn-outline-primary" name="actualizar"><i  class="fas fa-pen-alt"></i></a>
                        </td>
                        <td class="table-success">
                            <a href="{{route('ModalidadesOtrosTipos.destroy',$ModaliadOtroTipo->id_modalidades_otros_tipos)}}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-outline-danger" name="eliminar"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection