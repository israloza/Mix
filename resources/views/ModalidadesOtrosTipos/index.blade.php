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

                </thead>
                <tbody>
                @foreach($ModalidadesOtrosTipos as $ModalidadOtroTipo)
                    <tr>
                        <td>{{$ModalidadOtroTipo->id_modalidades_otros_tipos}}</td>
                        <td>{{$ModalidadOtroTipo->descripcion}}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
