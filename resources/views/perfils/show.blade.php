@extends('layouts.app')

@section('menu')
<li class="nav-item">
    <a class="nav-link js-scroll-trigger" href="#sobre">Sobre</a>
</li>
<form action="{{route('perfils.destroy', ['perfil' => $perfil->id])}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" id="plusIconSeccao" class="btn">
            <i class="fas fa-trash-alt fa-2x iconLink"></i>
        </button>
</form>
@endsection

@section('content')
<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="sobre">
    <div class="w-100">
        <div class="editPerfil">
            <a href="{{route('perfils.edit', ['perfil' => $perfil->id])}}" id="perfilIcon" class="fas fa-edit fa-2x iconLink" title="Editar Perfil"></a>
        </div>
        <img class="img-perfil mr-4 mb-4 float-left" src="{{ URL::to('/') }}/img/{{ $perfil->foto }}" alt="">
        <h1 class="mb-0">{{$perfil->nome}}
            <span class="text-primary">{{$perfil->sobrenome}}</span>
        </h1>
        <div class="subheading mb-4">{{$perfil->endereco}}
            <a href="mailto:' . $p->email . '">{{$perfil->email}}</a>
        </div>
        <p class="lead mb-5">{{$perfil->descricao}}</p>
        <div class="social-icons">
            @if($perfil->linkedin)
            <a href="{{$perfil->linkedin}}" target="_blank">
                <i class="fab fa-linkedin-in"></i>
            </a>
            @endif
            @if($perfil->facebook)
            <a href="{{$perfil->facebook}}" target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
            @endif
            @if($perfil->github)
            <a href="{{$perfil->github}}" target="_blank">
                <i class="fab fa-github"></i>
            </a>
            @endif
            @if($perfil->twitter)
            <a href="{{$perfil->twitter}}" target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
            @endif
        </div>
    </div>
</section>
@endsection