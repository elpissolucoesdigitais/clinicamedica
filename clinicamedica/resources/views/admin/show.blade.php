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
        <a href="#"><span class="fa fa-home mr-3"></span> Home</a>
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
  <h1 class="text-center">Admin {{$admin->nome}}</h1><hr>
  @php
      //$paciente=$agenda->find($agenda->id)->relPacientes;
  @endphp
  <div class="col-8 m-auto">
      <form>
        <fieldset disabled>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="nome">Nome Admin</label>
              <input type="text" class="form-control" id="nome" name="nome" value="{{$admin->nome}}">
            </div>
           
          </div>
          <div class="form-row">
              <div class="form-group ">
              <label for="rg">RG</label>
              <input type="text" class="form-control" id="rg" name="rg" value="{{$admin->rg}}">
              </div>
              <div class="form-group col-md-4">
                  <label for="datanascimento">Data de Nascimento</label>
                  <input type="text" class="form-control" id="datanascimento" name="datanascimento" value="{{$admin->datanascimento}}">
              </div>
              <div class="form-group col-md-7">
                  <label for="cpf">CPF</label>
                  <input type="text" class="form-control" id="cpf" name="cpf" value="{{$admin->cpf}}">
              </div>
          </div>
          <div class="form-group">
            <label for="sexo">Sexo</label>
            <input type="text" class="form-control" id="sexo" name="sexo" value="{{$admin->sexo}}">
          </div>
          <div class="form-row">
            <div class="form-group ">
              <label for="cidade">Cidade</label>
              <input type="text" class="form-control" id="cidade" name="cidade" value="{{$admin->cidade}}">
            </div>
            
            <div class="form-group col-md-2">
              <label for="bairro">Bairro</label>
              <input type="text" class="form-control" id="bairro" name="bairro" value="{{$admin->bairro}}">
            </div>
            <div class="form-group col-md-2">
              <label for="cep">Cep</label>
              <input type="text" class="form-control" id="cep" name="cep" value="{{$admin->cep}}">
            </div>
            <div class="form-group col-md-2">
              <label for="contato">Contato</label>
              <input type="text" class="form-control" id="contato" name="contato" value="{{$admin->contato}}">
            </div>
            <div class="form-group col-md-3">
              <label for="criado">Criado</label>
              <input type="text" class="form-control" id="criado" name="criado" value="{{$admin->created_at}}">
            </div>
        

          </div>

          <div class="form-group">
            <label for="e-mail">E-mail</label>
            <input type="text" class="form-control" id="e-mail" name="e-mail" value="{{$admin->email}}">
          </div>
          <div class="form-group">
            <label for="complemento">Complemento</label>
            <input type="text" class="form-control" id="complemento" name="complemento" value="{{$admin->complemento}}">
          
            
        
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="salario">Salario</label>
                <input type="text" class="form-control" id="salario" name="salario" value="{{$admin->salario}}">
              </div>
              <div class="form-group col-md-4">
                <label for="longradouro">Longradouro</label>
                <input type="text" class="form-control" id="longradouro" name="longradouro" value="{{$admin->longradouro}}">
              </div>
              <div class="form-group col-md-4">
                <label for="uf">Uf</label>
                <input type="text" class="form-control" id="uf" name="uf" value="{{$admin->uf}}">
              </div>
        </div>

        <div class="form-row">
        <div class="form-group">
            <label for="updated_at">Ultima Atualização</label>
            <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{$admin->updated_at}}">
          </div>

          <div class="form-group col-md-5">
            <label for="foto">Foto do Admin</label>
            <input type="text" class="form-control" id="foto" name="foto" value="{{$admin->foto}}">
          </div>
          <div class="form-group col-md-3">
            <label for="crm">CRM</label>
            <input type="text" class="form-control" id="crm" name="crm" value="{{$admin->crm}}">
          </div>
        </div>
          

        </fieldset>  
        </form>
  </div> 
  @endsection

