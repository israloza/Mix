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
                @foreach($ModalidadesOtrosTipos as $ModalidadOtroTipo)
                    <tr>
                        <td>{{$ModalidadOtroTipo->id_modalidades_otros_tipos}}</td>
                        <td>{{$ModalidadOtroTipo->descripcion}}</td>
                        <td>
                            <a href="" class="btn btn-outline-primary" name="actualizar"><i class="fas fa-pen-alt"></i></a>
                        </td>
                        <td>
                            <form action="" method="post">
                                @csrf
                                @method('DELETE')
                                <button href="" class="btn btn-outline-danger" name="eliminar"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
