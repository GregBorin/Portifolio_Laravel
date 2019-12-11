@extends('layouts.app')

@section('menu')
    <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#experience">Experience</a>
    </li>
@endsection

@section('content')
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
        <div class="w-100">
            <form action="{{route('perfils.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="w-100">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputNome">Nome</label>
                            <input type="text" class="form-control rounded-0" id="inputNome" name="nome" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputSobrenome">Sobrenome</label>
                            <input type="text" class="form-control rounded-0" id="inputSobrenome" name="sobrenome" required>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <img id="previewProfilePic" class="previewProfilePic rounded-0 img-thumbnail" src="">
                        <div class="custom-file">
                            <input type="file" accept="image/*" class="custom-file-input rounded-0" name="foto" id="fileToUpload" onchange="loadFile(event)">
                            <label class="custom-file-label rounded-0" for="fileToUpload">Escolher imagem de perfil</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">E-mail</label>
                        <input type="email" class="form-control rounded-0" id="inputEmail" name="email" placeholder="exemplo@email.com" required>
                    </div>
                    <div class="form-group">
                        <label for="inputEndereco">Endereço</label>
                        <input type="text" class="form-control rounded-0" id="inputEndereco" name="endereco" placeholder="Pais, Estado..." required>
                    </div>
                    <div class="form-group" id="descricaoForm">
                        <label for="inputDescricao">Descrição</label>
                        <textarea class="form-control rounded-0" id="inputDescricao" name="descricao" rows="4" required></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control rounded-0"  name="linkedin" placeholder="www.linkedin.com">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control rounded-0"  name="facebook" placeholder="www.facebook.com">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control rounded-0"  name="github" placeholder="www.github.com">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control rounded-0" name="twitter" placeholder="www.twitter.com">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-dark rounded-0">Salvar mudanças</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <script>
    var loadFile = function(event) {
      var output = document.getElementById('previewProfilePic');
      output.src = URL.createObjectURL(event.target.files[0]);
    };
  </script>
@endsection