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
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
