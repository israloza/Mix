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
                <th>Actualizar</th>
                <th>Eliminar</th>

                </thead>
                <tbody>
                @foreach($DatosPersonales as $DatoPersonal)
                    <tr>
                        <td>{{$DatoPersonal->id_datos_personales}}</td>
                        <td>{{$DatoPersonal->descripcion}}</td>
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

