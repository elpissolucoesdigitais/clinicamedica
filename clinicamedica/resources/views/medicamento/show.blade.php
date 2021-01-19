@extends('templates.template')

@section('content')

<!-- Página do crud  -->
<div id="content" class="p-4 p-md-5 pt-5">
  <h1 class="text-center">Medicamento {{$medicamento->nome}} </h1><hr>
  @php
      //$convenio=$agenda->find($agenda->id)->relconvenios;
  @endphp
  <div class="col-8 m-auto">
      <form>
        <fieldset disabled>
            <div class="form-group col-md-12">
                <label for="nomemedicamento">Nome do medicamento</label>
                <input type="text" class="form-control" id="nomemedicamento" name="nomemedicamento" value="{{$medicamento->nome}}">
            </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="dose">Dose do medicamento</label>
              <input type="text" class="form-control" id="dose" name="dose" value="{{$medicamento->dose}}">
            </div>
           
          </div>
          <div class="form-row">
              <div class="form-group ">
              <label for="descricao">Descrição</label>
              <input type="textarea" class="form-control" id="descricao" name="descricao" value="{{$medicamento->descricao}}">
              </div>
              
              <div class="form-group col-md-7">
                  <label for="consulta">Médico</label>
                  <input type="text" class="form-control" id="consulta" name="consulta" value="{{$medicamento->fk_medico}}">
              </div>
          </div>
        
          <div class="form-row">
        
            <div class="form-group col-md-3">
              <label for="criado">Criado</label>
              <input type="text" class="form-control" id="criado" name="criado" value="{{$medicamento->created_at}}">
            </div>
            <div class="form-group">
              <label for="updated_at">Ultima Atualização</label>
              <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{$medicamento->updated_at}}">
            </div>
          </div>  
        </fieldset>  
        </form>
  </div> 
  @endsection