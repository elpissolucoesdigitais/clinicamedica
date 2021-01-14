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
  <h1 class="text-center">Medico {{$medico->nome}} </h1><hr>
  @php
      //$convenio=$agenda->find($agenda->id)->relconvenios;
  @endphp
  <div class="col-8 m-auto">
      <form>
        <fieldset disabled>
            <div class="form-group col-md-12">
                <label for="nomemedico">Nome do Médico(a)</label>
                <input type="text" class="form-control" id="nomemedico" name="nomemedico" value="{{$medico->nome}}">
            </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="nomeespecialidae">Especialidade</label>
              <input type="text" class="form-control" id="nomeespecialidae" name="nomeespecialidae" value="{{$medico->especialidade}}">
            </div>
            <div class="form-group col-md-12">
                <label for="cpf">cpf</label>
                <input type="text" class="form-control" id="cpf" name="cpf" value="{{$medico->cpf}}">
            </div>
            <div class="form-group col-md-12">
                <label for="rg">rg</label>
                <input type="text" class="form-control" id="rg" name="rg" value="{{$medico->rg}}">
          </div>
            <div class="form-group col-md-12">
                <label for="email">email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{$medico->email}}">
          </div>
          <div class="form-group col-md-12">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" value="{{$medico->cidade}}">
          </div>
          <div class="form-group col-md-12">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" id="bairro" name="bairro" value="{{$medico->bairro}}">
          </div>
          <div class="form-group col-md-12">
            <label for="longradouro">Longradouro</label>
            <input type="text" class="form-control" id="longradouro" name="longradouro" value="{{$medico->longradouro}}">
          </div>
         
          <div class="form-row">
              <div class="form-group ">
              <label for="crm">CRM</label>
              <input type="text" class="form-control" id="crm" name="crm" value="{{$medico->crm}}">
              </div>
              
              <div class="form-group col-md-7">
                  <label for="crmuf">crmuf</label>
                  <input type="text" class="form-control" id="crmuf" name="crmuf" value="{{$medico->crmuf}}">
              </div>
          </div>
        
          <div class="form-row">
        
            <div class="form-group col-md-6">
              <label for="criado">Criado</label>
              <input type="text" class="form-control" id="criado" name="criado" value="{{$medico->created_at}}">
            </div>
            <div class="form-group col-md-6">
                <label for="sexo">sexo</label>
                <input type="text" class="form-control" id="sexo" name="sexo" value="{{$medico->sexo}}">
              </div>
          </div>  
        </fieldset>  
        </form>
  </div> 
  @endsection