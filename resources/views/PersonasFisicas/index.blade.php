@extends('Administradores.index')
@section('title','Personas Fisicas')
@section('content')
    <h1 class="text-black-50 text-center">Personas Fisicas</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("PersonasFisicas/create")}}">Agregar</a></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th class="table-active">Id Persona Fisica</th>
                <th class="table-active">Apellido Paterno</th>
                <th class="table-active">Apellido Materno</th>
                <th class="table-active">Nombre</th>
                <th class="table-active">Actualizar</th>
                <th class="table-active">Eliminar</th>
                </thead>
                <tbody>
                @foreach($PersonasFisicas as $PersonaFisica)
                    <tr>
                        <td class="table-success">{{$PersonaFisica->id_personas_fisicas}}</td>
                        <td class="table-success">{{$PersonaFisica->ap}}</td>
                        <td class="table-success">{{$PersonaFisica->am}}</td>
                        <td class="table-success">{{$PersonaFisica->nombre}}</td>
                        <td class="table-success">
                            <a href="{{route('PersonasFisicas.edit',$PersonaFisica->id_personas_fisicas)}}" onclick="return confirm('¿Seguro que deseas modificarlo?')" class="btn btn-outline-primary" name="actualizar"><i  class="fas fa-pen-alt"></i></a>
                        </td>
                        <td class="table-success">
                            <a href="{{route('PersonasFisicas.destroy',$PersonaFisica->id_personas_fisicas)}}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-outline-danger" name="eliminar"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
