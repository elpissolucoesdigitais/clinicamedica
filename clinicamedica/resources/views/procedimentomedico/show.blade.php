@extends('templates.template')

@section('content')

<!-- Página do crud  -->
<div id="content" class="p-4 p-md-5 pt-5">
  <h1 class="text-center">Procedimento Medico</h1><hr>
  @php
      //$paciente=$agenda->find($agenda->id)->relPacientes;
  @endphp
  <div class="col-8 m-auto">
      <form>
        <fieldset disabled>
          <div class="form-row">
            <div class="form-group col-md-12">
              @php
                $procedimento=$procedimentoMedico->find($procedimentoMedico->id)->relProcedimento;
              @endphp
            
              <label for="nomeprocedimento">Procedimento</label>
              <input type="text" class="form-control" id="nomeprocedimento" name="nomeprocedimento" value="{{$procedimento->nome}}">
            </div>
           
          </div>
          <div class="form-row">
              
              <div class="form-group">
                @php
                  $medico=$procedimentoMedico->find($procedimentoMedico->id)->relMedico;
                @endphp
            
                <label for="nomemedico">Medico</label>
                <input type="text" class="form-control" id="nomemedico" name="nomemedico" value="{{$medico->nome}}">
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
