@extends('templates.template')

@section('content')

<!-- Página do crud  -->
<div id="content" class="p-4 p-md-5 pt-5">
  <h1 class="text-center">Procedimento Tecnico</h1><hr>
  @php
      //$paciente=$agenda->find($agenda->id)->relPacientes;
  @endphp
  <div class="col-8 m-auto">
      <form>
        <fieldset disabled>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="fk_tecnico_saude">Tecnico de Saude</label>
              <input type="text" class="form-control" id="fk_tecnico_saude" name="fk_tecnico_saude" value="{{$procedimentotecnico->fk_tecnico_saude}}">
            </div>
           
          </div>
          <div class="form-row">
              
              <div class="form-group">
                  <label for="fk_procedimento">Procedimento</label>
                  <input type="text" class="form-control" id="fk_procedimento" name="fk_procedimento" value="{{$procedimentotecnico->fk_procedimento}}">
              </div>
          </div>
          
          
            <div class="form-row">
            <div class="form-group">
              <label for="criado">Criado</label>
              <input type="text" class="form-control" id="criado" name="criado" value="{{$procedimentotecnico->created_at}}">
            </div>
            <div class="form-group col-md-5">
                <label for="updated_at">Ultima Atualização</label>
                <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{$procedimentotecnico->updated_at}}">
              </div>
            </div>         
        

        </fieldset>  
        </form>
  </div>
  @endsection
