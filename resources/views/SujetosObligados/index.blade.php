@extends('Template.template')
@section('title','Sujetos Obligados')
@section('content')
    <h1 class="bg-primary text-white text-center">Sujetos Obligados</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("SujetosObligados/create")}}">Agregar</a></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>Id Sujeto Obligado</th>
                <th>Lugar</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
                </thead>
                <tbody>
                @foreach($SujetosObligados as $SujetoObligado)
                    <tr>
                        <td>{{$SujetoObligado->id_sujetos_obligados}}</td>
                        <td>{{$SujetoObligado->lugar}}</td>
                        <td>{{$SujetoObligado->fecha}}</td>
                        <td>{{$SujetoObligado->hora}}</td>
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
