@extends('Template.template')
@section('title','Datos Personales')
@section('content')
    <h1 class="bg-primary text-white text-center">Datos Personales</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("DatosPersonales/create")}}">Agregar</a></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>Id Datos Personales</th>
                <th>Descripción</th>

                </thead>
                <tbody>
                @foreach($DatosPersonales as $DatoPersonal)
                    <tr>
                        <td>{{$DatoPersonal->id_datos_personales}}</td>
                        <td>{{$DatoPersonal->descripcion}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

