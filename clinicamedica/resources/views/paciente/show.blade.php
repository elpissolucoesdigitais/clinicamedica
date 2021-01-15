@extends('templates.template')

@section('content')
<div class="wrapper d-flex align-items-stretch">
  <nav id="sidebar">
    <div class="custom-menu">
      <button type="button" id="sidebarCollapse" class="btn btn-primary">
      </button>
    </div>
    <div class="img bg-wrap text-center py-4" style="background-image: url(../assets/images/bg_1.jpg);">
      <div class="user-logo">
        <div class="img" style="background-image: url(../assets/images/logo.jpg);"></div>
        <h3>Admin</h3>
      </div>
    </div>
    <ul class="list-unstyled components mb-5">
      <li class="active">
        <a href="#"><span class="fa fa-home mr-3"></span>Home</a>
      </li>
      <li>
          <a href="#"><span class="fa fa-download mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span>Cadastro</a>
      </li>
      <li>
        <a href="#"><span class="fa fa-gift mr-3"></span>Relatório</a>
      </li>
      <li>
        <a href="#"><span class="fa fa-trophy mr-3"></span>Medicamento</a>
      </li>
      <li>
        <a href="#"><span class="fa fa-cog mr-3"></span>Exame</a>
      </li>
      <li>
        <a href="#"><span class="fa fa-support mr-3"></span>Suporte</a>
      </li>
      <li>
        <a href="#"><span class="fa fa-sign-out mr-3"></span>Sair</a>
      </li>
    </ul>

  </nav>


<!-- Página do crud  -->
<div id="content" class="p-4 p-md-5 pt-5">
  <h1 class="text-center">Paciente {{$paciente->nome}} </h1><hr>
  @php
      //$paciente=$agenda->find($agenda->id)->relPacientes;
  @endphp
  <div class="col-8 m-auto">
      <form>
        <fieldset disabled>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="nomePaciente">Nome Paciente</label>
              <input type="text" class="form-control" id="nomePaciente" name="nomePaciente" value="{{$paciente->nome}}">
            </div>
           
          </div>
          <div class="form-row">
              <div class="form-group ">
              <label for="rg">RG</label>
              <input type="text" class="form-control" id="rg" name="rg" value="{{$paciente->rg}}">
              </div>
              <div class="form-group col-md-2">
                  <label for="dataNascimento">Nascimento</label>
                  <input type="text" class="form-control" id="dataNascimento" name="dataNascimento" value="{{$paciente->dataNascimento}}">
              </div>
              <div class="form-group col-md-7">
                  <label for="cpf">CPF</label>
                  <input type="text" class="form-control" id="cpf" name="cpf" value="{{$paciente->cpf}}">
              </div>
          </div>
          <div class="form-group">
            <label for="sexo">Sexo</label>
            <input type="text" class="form-control" id="sexo" name="sexo" value="{{$paciente->sexo}}">
          </div>
          <div class="form-row">
            <div class="form-group ">
              <label for="cidade">Cidade</label>
              <input type="text" class="form-control" id="cidade" name="cidade" value="{{$paciente->cidade}}">
            </div>
            
            <div class="form-group col-md-2">
              <label for="bairro">Bairro</label>
              <input type="text" class="form-control" id="bairro" name="bairro" value="{{$paciente->bairro}}">
            </div>
            <div class="form-group col-md-2">
              <label for="cep">Cep</label>
              <input type="text" class="form-control" id="cep" name="cep" value="implementar">
            </div>
            <div class="form-group col-md-2">
              <label for="contato">Contato</label>
              <input type="text" class="form-control" id="contato" name="contato" value="{{$paciente->contato}}">
            </div>
            <div class="form-group col-md-3">
              <label for="criado">Criado</label>
              <input type="text" class="form-control" id="criado" name="criado" value="{{$paciente->created_at}}">
            </div>
            <div class="form-group col-md-3">
              <label for="altura">Altura</label>
              <input type="text" class="form-control" id="altura" name="altura" value="{{$paciente->altura}}">
            </div>
            <div class="form-group col-md-3">
              <label for="pressao">Pressão Arterial</label>
              <input type="text" class="form-control" id="pressao" name="pressao" value="{{$paciente->pressao}}">
            </div>
            
          </div>
          
          <div class="form-row">
            <div class="form-group">
              <label for="numero">Numero</label>
              <input type="text" class="form-control" id="numero" name="numero" value="{{$paciente->numero}}">
            </div>

            <div class="form-group col-md-3">
              <label for="uf">UF</label>
              <input type="text" class="form-control" id="uf" name="uf" value="{{$paciente->uf}}">
            </div>
            <div class="form-group col-md-3">
              <label for="peso">Peso</label>
              <input type="text" class="form-control" id="peso" name="peso" value="{{$paciente->peso}}">
            </div>

          </div>

          <div class="form-group">
            <label for="longradouro">Longradouro</label>
            <input type="text" class="form-control" id="longradouro" name="longradouro" value="{{$paciente->longradouro}}">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{$paciente->email}}">
          </div>

          <div class="form-group">
            <label for="foto">Foto do Paciente</label>
            <input type="text" class="form-control" id="foto" name="foto" value="{{$paciente->foto}}">
          </div>

          <div class="form-group">
            <label for="nomepai">Nome do Pai</label>
            <input type="text" class="form-control" id="nomepai" name="nomepai" value="{{$paciente->nomepai}}">
          </div>

          <div class="form-group">
            <label for="nomemae">Nome da Mãe</label>
            <input type="text" class="form-control" id="nomemae" name="nomemae" value="{{$paciente->nomemae}}">
          </div>

          <div class="form-group">
            <label for="complemento">Complemento</label>
            <input type="text" class="form-control" id="complemento" name="complemento" value="{{$paciente->complemento}}">
          </div>

          <div class="form-group">
            <label for="fk_convenio">Convenio</label>
            <input type="text" class="form-control" id="fk_convenio" name="fk_convenio" value="{{$paciente->fk_convenio}}">
          </div>

          <div class="form-group">
            <label for="updated_at">Ultima Atualização</label>
            <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{$paciente->updated_at}}">
          </div>

        </fieldset>  
        </form>
  </div> 
  @endsection