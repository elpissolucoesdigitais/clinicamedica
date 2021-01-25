@extends('templates.template')

@section('content')

<!-- Página do crud  -->
<div id="content" class="p-4 p-md-5 pt-5">
  <h1 class="text-center">Receita Financeira</h1><hr>
  @php
      //$paciente=$agenda->find($agenda->id)->relPacientes;
  @endphp
  <div class="col-8 m-auto">
      <form>
        <fieldset disabled>
          <div class="form-row">
            <div class="form-group col-md-12">
              @php
                $consulta=$receitaFinanceira->find($receitaFinanceira->id)->relConsulta;
              @endphp
            
              <label for="statusconsulta">Consulta</label>
              <input type="text" class="form-control" id="statusconsulta" name="statusconsulta" value="{{$consulta->status}}">
            </div>
           
          </div>
          <div class="form-row">
              
              <div class="form-group">
                @php
                  $administradora=$receitaFinanceira->find($receitaFinanceira->id)->relAdministradora;
                @endphp
            
                <label for="nomeadministradora">Administradora</label>
                <input type="text" class="form-control" id="nomeadministradora" name="nomeadministradora" value="{{$administradora->nome}}">
              </div>
          </div>
          
          
            <div class="form-row">
            <div class="form-group">
              <label for="criado">Criado</label>
              <input type="text" class="form-control" id="criado" name="criado" value="{{$receitaFinanceira->created_at}}">
            </div>
            <div class="form-group col-md-5">
                <label for="updated_at">Ultima Atualização</label>
                <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{$receitaFinanceira->updated_at}}">
              </div>
            </div>         
        

        </fieldset>  
        </form>
  </div>
  @endsection
