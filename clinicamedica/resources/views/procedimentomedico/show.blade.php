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
  <h1 class="text-center">Procedimento Tem Medico</h1><hr>
  @php
      //$paciente=$agenda->find($agenda->id)->relPacientes;
  @endphp
  <div class="col-8 m-auto">
      <form>
        <fieldset disabled>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="fk_procedimento">Procedimento</label>
              <input type="text" class="form-control" id="fk_procedimento" name="fk_procedimento" value="{{$procedimentoMedico->fk_procedimento}}">
            </div>
           
          </div>
          <div class="form-row">
              
              <div class="form-group">
                  <label for="fk_medico">Medico</label>
                  <input type="text" class="form-control" id="fk_medico" name="fk_medico" value="{{$procedimentoMedico->fk_medico}}">
              </div>
          </div>
          
          
            <div class="form-row">
            <div class="form-group">
              <label for="criado">Criado</label>
              <input type="text" class="form-control" id="criado" name="criado" value="{{$procedimentoMedico->created_at}}">
            </div>
            <div class="form-group col-md-5">
                <label for="updated_at">Ultima Atualização</label>
                <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{$procedimentoMedico->updated_at}}">
              </div>
            </div>         
        

        </fieldset>  
        </form>
  </div>
  @endsection
