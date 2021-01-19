@extends('templates.template')

@section('content')

<!-- Página do crud  -->
<div id="content" class="p-4 p-md-5 pt-5">
  <h1 class="text-center">exame {{$exame->nome}} </h1><hr>
  @php
      //$convenio=$agenda->find($agenda->id)->relconvenios;
  @endphp
  <div class="col-8 m-auto">
      <form>
        <fieldset disabled>
            <div class="form-group col-md-12">
                <label for="nomepaciente">Nome do paciente(a)</label>
                <input type="text" class="form-control" id="nomepaciente" name="nomepaciente" value="{{$exame->fk_paciente}}">
            </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="nomeexame">Nome do Exame</label>
              <input type="text" class="form-control" id="nomeexame" name="nomeexame" value="{{$exame->nome}}">
            </div>
           
          </div>
          <div class="form-row">
              <div class="form-group ">
              <label for="descricao">Descrição da consulta</label>
              <input type="text" class="form-control" id="descricao" name="descricao" value="{{$exame->descricao}}">
              </div>
              
              <div class="form-group col-md-7">
                  <label for="consulta">Consulta</label>
                  <input type="text" class="form-control" id="consulta" name="consulta" value="{{$exame->fk_consulta}}">
              </div>
          </div>
        
          <div class="form-row">
        
            <div class="form-group col-md-4">
              <label for="criado">Criado</label>
              <input type="text" class="form-control" id="criado" name="criado" value="{{$exame->created_at}}">
            </div>
            <div class="form-group">
              <label for="updated_at">Ultima Atualização</label>
              <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{$exame->updated_at}}">
            </div>
          </div>  
        </fieldset>  
        </form>
  </div> 
  @endsection