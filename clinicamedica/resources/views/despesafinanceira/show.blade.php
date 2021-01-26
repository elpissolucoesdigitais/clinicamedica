@extends('templates.template')

@section('content')

<!-- Página do crud  -->
<div id="content" class="p-4 p-md-5 pt-5">
  <h1 class="text-center">Despesa Financeira</h1><hr>
  @php
      //$convenio=$agenda->find($agenda->id)->relconvenios;
  @endphp
  <div class="col-8 m-auto">
      <form>
        <fieldset disabled>
          <div class="form-row">
            <div class="form-group col-md-12">
                @php
                    $medico=$despesaFinanceira->find($despesaFinanceira->id)->relMedico;
                @endphp

                <label for="nomemedico">Medico</label>
                <input type="text" class="form-control" id="nomemedico" name="nomemedico" value="{{$medico->nome}}">
            </div>
           
          </div>
          <div class="form-row">
              <div class="form-group ">
                @php
                    $tecnicoSaude=$despesaFinanceira->find($despesaFinanceira->id)->relTecnicoSaude;
                @endphp

                <label for="nometecnico">Tecnico de Saude</label>
                <input type="text" class="form-control" id="nometecnico" name="nometecnico" value="{{$tecnicoSaude->nome}}">
              </div>
              <div class="form-group col-md-8">
                @php
                    $clinica=$despesaFinanceira->find($despesaFinanceira->id)->relClinica;
                @endphp

                <label for="nomeclinica">Clinica</label>
                <input type="text" class="form-control" id="nomeclinica" name="nomeclinica" value="{{$clinica->nome}}">
              </div>
              <div class="form-group col-md-7">
                @php
                    $secretaria=$despesaFinanceira->find($despesaFinanceira->id)->relSecretaria;
                @endphp

                <label for="nomesecretaria">Secretaria</label>
                <input type="text" class="form-control" id="nomesecretaria" name="nomesecretaria" value="{{$secretaria->nome}}">
              </div>
          </div>
          <div class="form-group">
            @php
                $estoque=$despesaFinanceira->find($despesaFinanceira->id)->relEstoque;
            @endphp

            <label for="nomeestoque">Estoque</label>
            <input type="text" class="form-control" id="nomeestoque" name="nomeestoque" value="{{$estoque->nome}}">
          </div>
          <div class="form-group ">
            <label for="tipo">Tipo</label>
            <select id="tipo" name="tipo" class="form-control">
                <option selected value="Variável">Variável</option>
                <option value="Fixa">Fixa</option>
            </select>
          </div>

          <div class="form-row">
            
            
            
            
            <div class="form-group col-md-10">
              <label for="criado">Criado</label>
              <input type="text" class="form-control" id="criado" name="criado" value="{{$despesaFinanceira->created_at}}">
            </div>
          </div>  

          <div class="form-group">
            <label for="updated_at">Ultima Atualização</label>
            <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{$despesaFinanceira->updated_at}}">
          </div>

        </fieldset>  
        </form>
  </div> 
  @endsection