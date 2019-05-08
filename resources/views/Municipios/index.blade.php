@extends('Template.template')
@section('title','Municipios')
@section('content')
    <h1 class="bg-primary text-white text-center">Municipios</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("Municipios/create")}}">Agregar</a></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>Id Municipio</th>
                <th>Municipio</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
                </thead>
                <tbody>
                @foreach($Municipios as $Municipio)
                    <tr>
                        <td>{{$Municipio->id_municipios}}</td>
                        <td>{{$Municipio->descripcion}}</td>
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
