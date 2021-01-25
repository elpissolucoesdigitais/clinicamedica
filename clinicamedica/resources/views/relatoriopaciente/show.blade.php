@extends('templates.template')

@section('content')

<!-- Página do crud  -->
<div id="content" class="p-4 p-md-5 pt-5">
  <h1 class="text-center">Relatorio do Paciente: {{$relatorioPaciente->nome}}</h1><hr>
  @php
      //$paciente=$agenda->find($agenda->id)->relPacientes;
  @endphp
  <div class="col-8 m-auto">
      <form>
        <fieldset disabled>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="nome">Nome do Relatorio do Paciente</label>
              <input type="text" class="form-control" id="nome" name="nome" value="{{$relatorioPaciente->nome}}">
            </div>
           
          </div>
          <div class="form-row">
              
              <div class="form-group">
                  <label for="descricao">Descrição</label>
                  <input type="text" class="form-control" id="descricao" name="descricao" value="{{$relatorioPaciente->descricao}}">
              </div>
          </div>
          
          <div class="form-row">
            <div class="form-group">

              @php
                  $medicamento=$relatorioPaciente->find($relatorioPaciente->id)->relMedicamento;
              @endphp

              <label for="fk_medicamento">Medicamento</label>
              <input type="text" class="form-control" id="fk_medicamento" name="fk_medicamento" value="{{$medicamento->nome}}">
            </div>
            
            <div class="form-group col-md-5">

              @php
                  $medico=$relatorioPaciente->find($relatorioPaciente->id)->relMedico;
              @endphp

              <label for="fk_medico">Medico</label>
              <input type="text" class="form-control" id="fk_medico" name="fk_medico" value="{{$medico->nome}}">
            </div>
            
            

            <div class="form-row">
                <div class="form-group">
                  @php
                  $tecnicoSaude=$relatorioPaciente->find($relatorioPaciente->id)->relTecnicoSaude;
              @endphp

              <label for="fk_tecnico_saude">Tecnico de Saude</label>
              <input type="text" class="form-control" id="fk_tecnico_saude" name="fk_tecnico_saude" value="{{$tecnicoSaude->nome}}">
                </div>
            

            <div class="form-group col-md-8">

              @php
                  $exame=$relatorioPaciente->find($relatorioPaciente->id)->relExame;
              @endphp

              <label for="fk_exame">Exame</label>
              <input type="text" class="form-control" id="fk_exame" name="fk_exame" value="{{$exame->nome}}">
            </div>

          </div>

            <div class="form-row">
            <div class="form-group">
              <label for="criado">Criado</label>
              <input type="text" class="form-control" id="criado" name="criado" value="{{$relatorioPaciente->created_at}}">
            </div>
            <div class="form-group">
                <label for="updated_at">Ultima Atualização</label>
                <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{$relatorioPaciente->updated_at}}">
              </div>
              
            </div>
          </div>
        </fieldset>  
        </form>
  </div> 
  @endsection
