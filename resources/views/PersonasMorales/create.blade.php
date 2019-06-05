@extends('Template.template')
@section('title','Añadir Personas Morales')
@section('content')

    <h1 class="bg-primary text-dark text-left">Añadir Personas Morales</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("PersonasMorales")}}">Volver</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{url("PersonasMorales")}}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputPassword1">Razon o Denominación Social</label>
                    <input type="text" class="form-control" name="razon_den_social" placeholder="Razón o denominación social">
                    <label for="exampleInputPassword2">Apelllido Paterno</label>
                    <input type="text" class="form-control" name="ap_rep" placeholder="Apellido Paterno">
                    <label for="exampleInputPassword3">Apelllido Materno</label>
                    <input type="text" class="form-control" name="am_rep" placeholder="Apellido Materno">
                    <label for="exampleInputPassword4">Nombre</label>
                    <input type="text" class="form-control" name="nom_rep" placeholder="Nombre">
                </div>
                <button type="submit" class="btn-primary">Aceptar</button>
            </form>
        </div>
    </div>

@endsection
