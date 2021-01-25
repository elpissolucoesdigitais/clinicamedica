@extends('templates.template')

@section('content')

<!-- Página do crud  -->
<div id="content" class="p-4 p-md-5 pt-5">
  <h1 class="text-center">Tecnico Saude {{$tecnicoSaude->nome}}</h1><hr>
  @php
      //$paciente=$agenda->find($agenda->id)->relPacientes;
  @endphp
  <div class="col-8 m-auto">
      <form>
        <fieldset disabled>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="nome">Nome Tecnico Saude</label>
              <input type="text" class="form-control" id="nome" name="nome" value="{{$tecnicoSaude->nome}}">
            </div>
           
          </div>
          <div class="form-row">
              <div class="form-group col-md-2">
                  <label for="longradouro">Longradouro</label>
                  <input type="text" class="form-control" id="longradouro" name="longradouro" value="{{$tecnicoSaude->longradouro}}">
              </div>
          </div>
          
          <div class="form-row">
            <div class="form-group ">
              <label for="cidade">Cidade</label>
              <input type="text" class="form-control" id="cidade" name="cidade" value="{{$tecnicoSaude->cidade}}">
            </div>
            
            <div class="form-group col-md-2">
              <label for="bairro">Bairro</label>
              <input type="text" class="form-control" id="bairro" name="bairro" value="{{$tecnicoSaude->bairro}}">
            </div>
            <div class="form-group col-md-2">
              <label for="cep">Cep</label>
              <input type="text" class="form-control" id="cep" name="cep" value="{{$tecnicoSaude->cep}}">
            </div>
            <div class="form-group col-md-2">
              <label for="contato">Contato</label>
              <input type="text" class="form-control" id="contato" name="contato" value="{{$tecnicoSaude->contato}}">
            </div>
            <div class="form-row">
            <div class="form-group col-md-3">
              <label for="criado">Criado</label>
              <input type="text" class="form-control" id="criado" name="criado" value="{{$tecnicoSaude->created_at}}">
            </div>
            <div class="form-group col-md-4">
                <label for="uf">Uf</label>
                <input type="text" class="form-control" id="uf" name="uf" value="{{$tecnicoSaude->uf}}">
              </div>
              <div class="form-group">
                <label for="foto">Foto do Tecnico de Saude</label>
                <input type="text" class="form-control" id="foto" name="foto" value="{{$tecnicoSaude->foto}}">
              </div>
            </div>
        

          </div>

          <div class="form-group">
            <label for="e-mail">E-mail</label>
            <input type="text" class="form-control" id="e-mail" name="e-mail" value="{{$tecnicoSaude->email}}">
          </div>
          <div class="form-group">
            <label for="complemento">Complemento</label>
            <input type="text" class="form-control" id="complemento" name="complemento" value="{{$tecnicoSaude->complemento}}">
          
            
        
        </div>  
              
        
        <div class="form-row">
        <div class="form-group">
            <label for="updated_at">Ultima Atualização</label>
            <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{$tecnicoSaude->updated_at}}">
          </div>

          <div class="form-group col-md-4">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" value="{{$tecnicoSaude->cpf}}">
          </div>

          <div class="form-group col-md-4">
            <label for="salario">Salario</label>
            <input type="text" class="form-control" id="salario" name="salario" value="{{$tecnicoSaude->salario}}">
          </div>
        </div>

        <div class="form-group">
            <label for="especialidade">Especialidade</label>
            <input type="text" class="form-control" id="especialidade" name="especialidade" value="{{$tecnicoSaude->especialidade}}">
          </div>

          <div class="form-group">
            <label for="rg">RG</label>
            <input type="text" class="form-control" id="rg" name="rg" value="{{$tecnicoSaude->rg}}">
          </div>
          
          

        </fieldset>  
        </form>
  </div> 
  @endsection
