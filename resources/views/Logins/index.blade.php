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
                <th>Correo</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
                </thead>
                <tbody>
                @foreach($Logins as $Login)
                    <tr>
                        <td>{{$Login->id_login}}</td>
                        <td>{{$Login->nombre}}</td>
                        <td>{{$Login->ap}}</td>
                        <td>{{$Login->am}}</td>
                        <td>{{$Login->contraseña}}</td>
                        <td>{{$Login->correo}}</td>
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
