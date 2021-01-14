@extends('templates.template')

@section('content')
<!-- Página do crud  -->
<div id="content" class="p-4 p-md-5 pt-5">
  <h1 class="text-center">Cadastro</h1><hr>
  @php
      //$paciente=$agenda->find($agenda->id)->relPacientes;
  @endphp
  <div class="col-8 m-auto">
      <form>
        <fieldset disabled>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="fk_paciente">Paciente</label>
              <input type="text" class="form-control" id="fk_paciente" name="fk_paciente" value="{{$cadastro->fk_paciente}}">
            </div>
           
          </div>
          <div class="form-row">
              <div class="form-group ">
              <label for="fk_secretaria">Secretaria</label>
              <input type="text" class="form-control" id="fk_secretaria" name="fk_secretaria" value="{{$cadastro->fk_secretaria}}">
              </div>
              <div class="form-group col-md-2">
                  <label for="fk_administradora">Administradora</label>
                  <input type="text" class="form-control" id="fk_administradora" name="fk_administradora" value="{{$cadastro->fk_administradora}}">
              </div>
              
          </div>
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="criado">Criado</label>
              <input type="text" class="form-control" id="criado" name="criado" value="{{$cadastro->created_at}}">
            </div>
            <div class="form-group col-md-3">
                <label for="updated_at">Ultima Atualização</label>
                <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{$cadastro->updated_at}}">
              </div>
          </div>  
        </fieldset>  
        </form>
  </div> 
  @endsection

  <!---Atributo Faltando: id--->