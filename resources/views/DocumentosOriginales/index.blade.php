@extends('Administradores.index')
@section('title','DocumentosOriginales')
@section('content')
    <h1 class="btn-success text-black-50 text-center">Cargar Archivos</h1>



        <div class="row">
            <div class="col-4 offset-4">
                <form method="post" action="{{url("DocumentosOriginales")}}" enctype="multipart/form-data" >
                    @csrf

                    <div class="form-group">
                        <label for="exampleInputPassword1">Cargar Archivo</label>
                        <input type="file" class="form-control" name="cargar" placeholder="Cargar Archivo" required>
                    </div>

                    <button type="submit" class="btn-success">Aceptar</button>
                </form>
            </div>
        </div>

    </div>
@endsection
