@extends('Template.template')
@section('title','Administrador')
@section('content')
    <h1 class="bg-primary text-white text-center">Administrador</h1>
    <div class="row">
        <div class="col-12">
        <ul class="nav justify-content-center">
            <li class="nav-item"><a href="{{url("PersonasFisicas")}}" class="nav-link text-right text-black-50">Personas Fisicas</a></li>
            <li class="nav-item"><a href="{{url("PersonasMorales")}}" class="nav-link text-black-50">Personas Morales</a></li>
            <li class="nav-item"><a href="#!" class="nav-link text-black-50">Municipios</a></li>
            <li class="nav-item"><a href="{{url("Logins")}}" class="nav-link text-black-50">Login</a></li>
            <li class="nav-item"><a href="#!" class="nav-link text-black-50">Informacion Solicitada</a></li>
            <li class="nav-item"><a href="{{"SujetosObligados"}}" class="nav-link text-black-50">Sujetos Obligados</a></li>
            <li class="nav-item"><a href="#¡" class="nav-link text-black-50">Modalidad Entrega</a></li>
            <li class="nav-item"><a href="#!" class="nav-link text-black-50">Datos Personales</a></li>
            <li class="nav-item"><a href="{{url("ModalidadesOtrosTipos")}}" class="nav-link text-black-50">Modalidades otros tipos</a></li>
        </ul>
        </div>
    </div>

@endsection