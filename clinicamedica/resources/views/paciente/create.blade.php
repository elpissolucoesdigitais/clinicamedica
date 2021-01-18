@extends('templates.template')
@section('content')


<main>
    <header>
      <a href="dashboard.html"><i class="fas fa-home"></i> DashBoard</a>
      <a href="../index.html"><i class="fas fa-sign-out-alt"></i>Logout</a>
    </header>
    <div class="main-content">
      <div class="main-content-title">
        <h2>Perfil</h2>
      </div>
      <div class="perfil-parent">
        <div class="perfil">
          <div class="perfil-img">
              <div class="img">

              </div>
          </div>
          <div class="perfil-form">
            <form>
              <div class="form-group">
                <label for="nome">Nome completo</label>
                <input type="text" class="form-control" id="nome" placeholder="Nome completo">
              
              </div>
              <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="idade">Idade</label>
                <input type="number" class="form-control" id="idade">
              </div>
              <div class="form-group">
                <label for="genero">Gênero</label>
                <select class="form-control" id="genero">
                  <option value="masculino">Masculino</option>
                  <option value="feminino">Feminino</option>
                 
                </select>
              </div>
              <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha" placeholder="senha">
              </div>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
              <button type="submit" class="btn">Salvar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>

@endsection