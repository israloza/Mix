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
                <th>Actualizar</th>
                <th>Eliminar</th>
                </thead>
                <tbody>
                @foreach($PersonasFisicas as $PersonaFisica)
                    <tr>
                        <td>{{$PersonaFisica->id_personas_fisicas}}</td>
                        <td>{{$PersonaFisica->ap}}</td>
                        <td>{{$PersonaFisica->am}}</td>
                        <td>{{$PersonaFisica->nombre}}</td>
                        <td>
                            <a href="{{route('PersonasFisicas.edit',$PersonaFisica->id_personas_fisicas)}}" onclick="return confirm('¿Seguro que deseas modificarlo?')" class="btn btn-outline-primary" name="actualizar"><i  class="fas fa-pen-alt"></i></a>
                        </td>
                        <td>
                            <a href="{{route('PersonasFisicas.destroy',$PersonaFisica->id_personas_fisicas)}}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-outline-danger" name="eliminar"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
