@extends('Template.template')
@section('title','Añadir Sujetos Obligados')
@section('content')

    <h1 class="bg-success text-dark text-left">Añadir Sujetos Obligados</h1>
    <div class="row">
        <div class="col"><a class="btn-success" href="{{url("SujetosObligados")}}">Volver</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{url("SujetosObligados")}}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputPassword1">Lugar</label>
                    <input type="text" class="form-control" name="lugar" placeholder="Lugar">
                    <label for="exampleInputPassword2">Fecha</label>
                    <input type="text" class="form-control" name="fecha" placeholder="Fecha">
                    <label for="exampleInputPassword3">Hora</label>
                    <input type="text" class="form-control" name="hora" placeholder="Hora">

                </div>
                <button type="submit" class="btn-success">Aceptar</button>
            </form>
        </div>
    </div>

@endsection
