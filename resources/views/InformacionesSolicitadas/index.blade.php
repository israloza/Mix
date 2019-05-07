@extends('Template.template')
@section('title','Informaciones Solicitadas')
@section('content')
    <h1 class="bg-primary text-white text-center">Informaciones Solicitadas</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("InformacionesSolicitadas/create")}}">Agregar</a></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>Id Información Solicitada</th>
                <th>Informacion</th>

                </thead>
                <tbody>
                @foreach($InformacionesSolicitadas as $InformacionesSolicitada)
                    <tr>
                        <td>{{$InformacionesSolicitada->id_informaciones_solicitadas}}</td>
                        <td>{{$InformacionesSolicitada->descripcion}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
