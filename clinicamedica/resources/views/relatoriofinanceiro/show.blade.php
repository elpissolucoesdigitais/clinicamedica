@extends('templates.template')

@section('content')

<!-- Página do crud  -->
<div id="content" class="p-4 p-md-5 pt-5">
  <h1 class="text-center">Relatorio Financeira</h1><hr>
  @php
      //$paciente=$agenda->find($agenda->id)->relPacientes;
  @endphp
  <div class="col-8 m-auto">
      <form>
        <fieldset disabled>
          <div class="form-row">
            <div class="form-group col-md-12">
              @php
                $despesa=$relatorioFinanceiro->find($relatorioFinanceiro->id)->relDespesaFinanceira;
              @endphp
            
              <label for="tipodespesa">Despesa Financeira</label>
              <input type="text" class="form-control" id="tipodespesa" name="tipodespesa" value="{{$despesa->tipo}}">
            </div>
           
          </div>
          <div class="form-row">
              
              <div class="form-group">
                @php
                  $administradora=$relatorioFinanceiro->find($relatorioFinanceiro->id)->relAdministradora;
                @endphp
            
                <label for="nomeadministradora">Administradora</label>
                <input type="text" class="form-control" id="nomeadministradora" name="nomeadministradora" value="{{$administradora->nome}}">
              </div>
          </div>
          
          
            <div class="form-row">
            <div class="form-group">
              <label for="criado">Criado</label>
              <input type="text" class="form-control" id="criado" name="criado" value="{{$relatorioFinanceiro->created_at}}">
            </div>
            <div class="form-group col-md-5">
                <label for="updated_at">Ultima Atualização</label>
                <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{$relatorioFinanceiro->updated_at}}">
              </div>
            </div>         
        

        </fieldset>  
        </form>
  </div>
  @endsection
