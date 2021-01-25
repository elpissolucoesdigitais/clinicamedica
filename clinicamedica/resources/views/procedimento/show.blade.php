@extends('templates.template')

@section('content')
		
  <!-- Página do crud  -->
<div id="content" class="p-4 p-md-5 pt-5">
  <h1 class="text-center">Procedimento: {{$procedimento->nome}}</h1><hr>
  @php
      //$paciente=$agenda->find($agenda->id)->relPacientes;
  @endphp
  <div class="col-8 m-auto">
      <form>
        <fieldset disabled>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="nome">Nome do Procedimento</label>
              <input type="text" class="form-control" id="nome" name="nome" value="{{$procedimento->nome}}">
            </div>
           
          </div>

          <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" id="descricao" name="descricao" value="{{$procedimento->descricao}}">
          </div>

          <div class="form-group">
            @php
              $secretaria=$procedimento->find($procedimento->id)->relSecretaria;
            @endphp
            
            <label for="nomesecretaria">Secretaria</label>
            <input type="text" class="form-control" id="nomesecretaria" name="nomesecretaria" value="{{$secretaria->nome}}">
          </div>

          <div class="form-row">

            

          </div>
          
          
            <div class="form-row">
            <div class="form-group">
              <label for="criado">Criado</label>
              <input type="text" class="form-control" id="criado" name="criado" value="{{$procedimento->created_at}}">
            </div>
            <div class="form-group col-md-5">
                <label for="updated_at">Ultima Atualização</label>
                <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{$procedimento->updated_at}}">
              </div>
              <div class="form-group col-md-2">
                <label for="valor">Valor</label>
                <input type="text" class="form-control" id="valor" name="valor" value="{{$procedimento->valor}}">
            </div>
            </div>      
        

        </fieldset>  
        </form>
  </div>
      
  @endsection