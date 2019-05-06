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
                </thead>
                <tbody>
                @foreach($SujetosObligados as $SujetoObligado)
                    <tr>
                        <td>{{$SujetoObligado->id_sujetos_obligados}}</td>
                        <td>{{$SujetoObligado->lugar}}</td>
                        <td>{{$SujetoObligado->fecha}}</td>
                        <td>{{$SujetoObligado->hora}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
