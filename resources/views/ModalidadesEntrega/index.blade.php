@extends('Template.template')
@section('title','Modalidades Entregas')
@section('content')
    <h1 class="bg-primary text-white text-center">Modalidades Entregas</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("ModalidadesEntrega/create")}}">Agregar</a></div>
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
                @foreach($ModalidadesEntrega as $ModalidadEntrega)
                    <tr>
                        <td class="table-success">{{$ModalidadEntrega->descripcion}}</td>

                        <td class="table-success">
                            <a href="{{route('ModalidadesEntrega.edit',$ModalidadEntrega->id_modalidades_entregas)}}" onclick="return confirm('¿Seguro que deseas modificarlo?')" class="btn btn-outline-primary" name="actualizar"><i  class="fas fa-pen-alt"></i></a>
                        </td>
                        <td class="table-success">
                            <a href="{{route('ModalidadesEntrega.destroy',$ModalidadEntrega->id_modalidades_entregas)}}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-outline-danger" name="eliminar"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
