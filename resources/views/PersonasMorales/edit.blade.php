@extends('Template.template')
@section('title','Editar Personas Morales ')
@section('content')
    <h1 class="bg-success text-dark text-left">Editar Personas Morales {{$PersonasMoral->nom_rep}}</h1>
    <div class="row">
        <div class="col"><a class="btn-success" href="{{url("PersonasMorales")}}">Volver</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{route("PersonasMorales.update",$PersonasMoral->id_personas_morales)}}">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="exampleInputPassword1">Razón o denominación social</label>
                    <input type="text" class="form-control" name="razon_den_social" value='{{$PersonasMoral->razon_den_social}}'>
                    <label for="exampleInputPassword1">Apellido Paterno</label>
                    <input type="text" class="form-control" name="ap_rep" value='{{$PersonasMoral->ap_rep}}'>
                    <label for="exampleInputPassword2">Apelllido Materno</label>
                    <input type="text" class="form-control" name="am_rep" value='{{$PersonasMoral->am_rep}}'>
                    <label for="exampleInputPassword3">Nombre</label>
                    <input type="text" class="form-control" name="nom_rep" value='{{$PersonasMoral->nom_rep}}'>

                </div>
                <button type="submit" class="btn-success">Editar</button>
            </form>
        </div>
    </div>

@endsection
