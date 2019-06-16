@extends('Template.template')
@section('title','Sujetos Obligados')
@section('content')
    <h1 class="bg-success text-white text-center">Sujetos Obligados</h1>
    <div class="row">
        <div class="col"><a class="btn-success" href="{{url("SujetosObligados/create")}}">Agregar</a></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>Lugar</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
                </thead>
                <tbody>
                @foreach($SujetosObligados as $SujetoObligado)
                    <tr>
                        <td class="table-success">{{$SujetoObligado->lugar}}</td>
                        <td class="table-success">{{$SujetoObligado->fecha}}</td>
                        <td class="table-success">{{$SujetoObligado->hora}}</td>

                        <td class="table-success">
                            <a href="{{route('SujetosObligados.edit',$SujetoObligado->id_sujetos_obligados)}}" onclick="return confirm('¿Seguro que deseas modificarlo?')" class="btn btn-outline-primary" name="actualizar"><i  class="fas fa-pen-alt"></i></a>
                        </td>
                        <td class="table-success">
                            <a href="{{route('SujetosObligados.destroy',$SujetoObligado->id_sujetos_obligados)}}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-outline-danger" name="eliminar"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
