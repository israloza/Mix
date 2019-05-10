@extends('Template.template')
@section('title','Logins')
@section('content')
    <h1 class="bg-primary text-white text-center">Logins</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("Logins/create")}}">Agregar</a></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>Id Login</th>
                <th>Nombre</th>
                <th>Apellido Parterno</th>
                <th>Apellido Materno</th>
                <th>Contraeña</th>
                <th>Correo Electronico</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
                </thead>
                <tbody>
                @foreach($Logins as $Login)
                    <tr>
                        <td class="table-success">{{$Login->id_login}}</td>
                        <td class="table-success">{{$Login->nombre}}</td>
                        <td class="table-success">{{$Login->ap}}</td>
                        <td class="table-success">{{$Login->am}}</td>
                        <td class="table-success">{{$Login->contraseña}}</td>
                        <td class="table-success">{{$Login->correo}}</td>

                        <td class="table-success">
                            <a href="{{route('Logins.edit',$Login->id_login)}}" onclick="return confirm('¿Seguro que deseas modificarlo?')" class="btn btn-outline-primary" name="actualizar"><i  class="fas fa-pen-alt"></i></a>
                        </td>
                        <td class="table-success">
                            <a href="{{route('Logins.destroy',$Login->id_login)}}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-outline-danger" name="eliminar"><i class="fas fa-trash"></i><Login
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection