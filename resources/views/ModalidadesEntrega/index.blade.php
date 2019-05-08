@extends('Template.template')
@section('title','Modalidades Entrega')
@section('content')
    <h1 class="bg-primary text-white text-center">Modalidad Entrega</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("ModalidadesEntrega/create")}}">Agregar</a></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>Id Modalidad Entrega</th>
                <th>Descripción</th>

                </thead>
                <tbody>
                @foreach($ModalidadesEntrega as $ModalidadEntrega)
                    <tr>
                        <td>{{$ModalidadEntrega->id_modalidades_entregas}}</td>
                        <td>{{$ModalidadEntrega->descripcion}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

