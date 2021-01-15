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
  <h1 class="text-center">Convênio {{$convenio->nome}} </h1><hr>
  @php
      //$convenio=$agenda->find($agenda->id)->relconvenios;
  @endphp
  <div class="col-8 m-auto">
      <form>
        <fieldset disabled>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="nomeconvenio">Nome convênio</label>
              <input type="text" class="form-control" id="nomeconvenio" name="nomeconvenio" value="{{$convenio->nome}}">
            </div>
           
          </div>
          <div class="form-row">
              <div class="form-group ">
              <label for="status">status</label>
              <input type="text" class="form-control" id="status" name="status" value="{{$convenio->status}}">
              </div>
              <div class="form-group col-md-2">
                  <label for="descricao">Descrição</label>
                  <input type="text" class="form-control" id="descricao" name="descricao" value="{{$convenio->descricao}}">
              </div>
              <div class="form-group col-md-7">
                  <label for="validade">Validade</label>
                  <input type="text" class="form-control" id="validade" name="validade" value="{{$convenio->validade}}">
              </div>
          </div>
          <div class="form-group">
            <label for="cnpj">CNPJ</label>
            <input type="text" class="form-control" id="cnpj" name="cnpj" value="{{$convenio->cnpj}}">
          </div>
          <div class="form-group ">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" id="email" name="email" value="{{$convenio->email}}">
          </div>
          <div class="form-row">
            
            
            <div class="form-group col-md-4">
              <label for="contato">Contato</label>
              <input type="text" class="form-control" id="contato" name="contato" value="{{$convenio->contato}}">
            </div>
            <div class="form-group col-md-2">
              <label for="valor">valor</label>
              <input type="text" class="form-control" id="valor" name="valor" value="{{$convenio->valor}}">
            </div>
            <div class="form-group col-md-3">
              <label for="criado">Criado</label>
              <input type="text" class="form-control" id="criado" name="criado" value="{{$convenio->created_at}}">
            </div>
          </div>  

          <div class="form-group">
            <label for="updated_at">Ultima Atualização</label>
            <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{$convenio->updated_at}}">
          </div>

        </fieldset>  
        </form>
  </div> 
  @endsection