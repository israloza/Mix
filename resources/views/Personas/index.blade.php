@extends('Template.template')
@section('title','Personas')
@section('content')
    <h1 class="bg-primary text-white text-center">Personas</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("Personas/create")}}">Agregar</a></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>Nombre</th>
                <th>Apellido Parterno</th>
                <th>Apellido Materno</th>
                <th>Usuario</th>

                </thead>
                <tbody>
                @foreach($Personas as $Persona)
                    <tr>
                        <td class="table-success">{{$Persona->nombre}}</td>
                        <td class="table-success">{{$Persona->ap}}</td>
                        <td class="table-success">{{$Persona->am}}</td>
                        <td>{{isset($Persona->getUser[0])?$Persona->getUser[0]->name:""}}</td>
                         </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

