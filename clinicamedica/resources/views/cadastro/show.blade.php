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
              @php
                  $paciente=$cadastro->find($cadastro->id)->relPaciente;
              @endphp

              <label for="fk_paciente">Paciente</label>
              <input type="text" class="form-control" id="fk_paciente" name="fk_paciente" value="{{$paciente->nome}}">
            </div>
           
          </div>
          <div class="form-row">
              <div class="form-group ">
                @php
                $secretaria=$cadastro->find($cadastro->id)->relSecretaria;
            @endphp

            <label for="fk_secretaria">Secretaria</label>
            <input type="text" class="form-control" id="fk_secretaria" name="fk_secretaria" value="{{$secretaria->nome}}">
              </div>

              <div class="form-group col-md-8">
                @php
                  $administradora=$cadastro->find($cadastro->id)->relAdministradora;
                @endphp

                <label for="nomeadministradora">Administradora</label>
                <input type="text" class="form-control" id="nomeadministradora" name="nomeadministradora" value="{{$administradora->nome}}">
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