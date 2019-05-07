@extends('Administradores.index')
@section('title','Personas Fisicas')
@section('content')
    <h1 class="bg-primary text-white text-center">Personas Fisicas</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("PersonasFisicas/create")}}">Agregar</a></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>Id Persona Fisica</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Nombre</th>
                </thead>
                <tbody>
                @foreach($PersonasFisicas as $PersonaFisica)
                    <tr>
                        <td>{{$PersonaFisica->id_personas_fisicas}}</td>
                        <td>{{$PersonaFisica->ap}}</td>
                        <td>{{$PersonaFisica->am}}</td>
                        <td>{{$PersonaFisica->nombre}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
