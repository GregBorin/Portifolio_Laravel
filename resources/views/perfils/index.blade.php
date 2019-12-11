@extends('layouts.app')

@section('menu')
    <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#perfis">Perfis</a>
    </li>
@endsection

@section('content')
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="perfis">
        <div class="w-100">
            <div class="row">
                @forelse($perfils as $perfil)
                    <div class="col-md-4">
                        <a href="{{route('perfils.show', ['perfil' => $perfil->id])}}"> 
                            <img class="fotoPerfil" src="{{ URL::to('/') }}/img/{{ $perfil->foto }}" alt="">
                        </a>
                    </div>
                @empty
                    <h1 class="mb-0">Nenhum perfil <span class="text-primary">encontrado...</span></h1>
                @endforelse
            </div>
            <div class="adicionarPerfil">
                <a href="{{route('perfils.create')}}" id="perfilIcon" class="fas fa-plus fa-3x iconLink" title="Criar Perfil"></a>
            </div>
            {{$perfils->links()}}
        </div>
    </section>
@endsection