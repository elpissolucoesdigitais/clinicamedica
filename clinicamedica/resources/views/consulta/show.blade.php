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
  <h1 class="text-center">Consulta {{$consulta->nome}} </h1><hr>
  @php
      //$clinica=$agenda->find($agenda->id)->relclinicas;
  @endphp
        <div class="col-8 m-auto">
            <form>
                <fieldset disabled>
                    <div class="form-group col-md-12">
                        <label for="medico">Médico</label>
                            <input type="text" class="form-control" id="medico" name="medico" value="{{$consulta->fk_medico}}">
                    </div>    
                    <div class="form-row">
                        <div class="form-group col-md-12">
                        <label for="procedimento ">Procedimento</label>
                        <input type="text" class="form-control" id="procedimento " name="procedimento " value="{{$consulta->fk_procedimento}}">
                    </div>
                
        </div>
              
        
        <div class="form-group">
            <label for="hora">Hora da consulta</label>
            <input type="text" class="form-control" id="hora" name="hora" value="{{$consulta->hora}}">
        </div>
        <div class="form-row">
            <div class="form-group ">
                <label for="data">Data da consulta</label>
                <input type="text" class="form-control" id="data" name="data" value="{{$consulta->data}}">
            </div>
            
        <div class="form-group col-md-2">
              <label for="valor">Valor R$</label>
              <input type="text" class="form-control" id="valor" name="valor" value="{{$consulta->valor}}">
        </div>
        <div class="form-group col-md-2">
              <label for="status">Status</label>
              <input type="text" class="form-control" id="status" name="status" value="{{$consulta->status}}">
        </div>
        <div class="form-group col-md-3">
              <label for="criado">Criado</label>
              <input type="text" class="form-control" id="criado" name="criado" value="{{$consulta->created_at}}">
        </div>
    </div>  
        </fieldset>  
        </form>
  </div> 
  @endsection