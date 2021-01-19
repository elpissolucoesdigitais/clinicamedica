@extends('templates.template')

@section('content')

<!-- Página do crud  -->
<div id="content" class="p-4 p-md-5 pt-5">
  <h1 class="text-center">Medico {{$medico->nome}} </h1><hr>
  @php
      //$convenio=$agenda->find($agenda->id)->relconvenios;
  @endphp
  <div class="col-8 m-auto">
      <form>
        <fieldset disabled>
            <div class="form-group col-md-12">
                <label for="nomemedico">Nome do Médico(a)</label>
                <input type="text" class="form-control" id="nomemedico" name="nomemedico" value="{{$medico->nome}}">
            </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="nomeespecialidae">Especialidade</label>
              <input type="text" class="form-control" id="nomeespecialidae" name="nomeespecialidae" value="{{$medico->especialidade}}">
            </div>
            <div class="form-group col-md-12">
                <label for="cpf">cpf</label>
                <input type="text" class="form-control" id="cpf" name="cpf" value="{{$medico->cpf}}">
            </div>
            <div class="form-group col-md-12">
                <label for="rg">rg</label>
                <input type="text" class="form-control" id="rg" name="rg" value="{{$medico->rg}}">
          </div>
            <div class="form-group col-md-12">
                <label for="email">email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{$medico->email}}">
          </div>
          <div class="form-group col-md-12">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" value="{{$medico->cidade}}">
          </div>
          <div class="form-group col-md-12">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" id="bairro" name="bairro" value="{{$medico->bairro}}">
          </div>
          <div class="form-group col-md-12">
            <label for="longradouro">Longradouro</label>
            <input type="text" class="form-control" id="longradouro" name="longradouro" value="{{$medico->longradouro}}">
          </div>
         
          <div class="form-row">
              <div class="form-group ">
              <label for="crm">CRM</label>
              <input type="text" class="form-control" id="crm" name="crm" value="{{$medico->crm}}">
              </div>
              
              <div class="form-group col-md-7">
                  <label for="crmuf">crmuf</label>
                  <input type="text" class="form-control" id="crmuf" name="crmuf" value="{{$medico->crmuf}}">
              </div>
          </div>
        
          <div class="form-row">
        
            <div class="form-group col-md-6">
              <label for="criado">Criado</label>
              <input type="text" class="form-control" id="criado" name="criado" value="{{$medico->created_at}}">
            </div>
            <div class="form-group">
                <label for="sexo">sexo</label>
                <input type="text" class="form-control" id="sexo" name="sexo" value="{{$medico->sexo}}">
              </div>
          </div>  

          <div class="form-group col-md-8">
            <label for="complemento">Complemento</label>
            <input type="text" class="form-control" id="complemento" name="complemento" value="{{$medico->complemento}}">
          </div>

          <div class="form-group col-md-5">
            <label for="contato">Contato</label>
            <input type="text" class="form-control" id="contato" name="contato" value="{{$medico->contato}}">
          </div>

          <div class="form-group col-md-2">
            <label for="uf">UF</label>
            <input type="text" class="form-control" id="uf" name="uf" value="{{$medico->uf}}">
          </div>

          <div class="form-group col-md-2">
            <label for="cep">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" value="{{$medico->cep}}">
          </div>

          <div class="form-group col-md-4">
            <label for="datanascimento">Data de Nascimento</label>
            <input type="text" class="form-control" id="datanascimento" name="datanascimento" value="{{$medico->datanascimento}}">
          </div>

          <div class="form-group col-md-4">
            <label for="foto">Foto do Medico</label>
            <input type="text" class="form-control" id="foto" name="foto" value="{{$medico->foto}}">
          </div>

          <div class="form-group col-md-4">
            <label for="salario">Salario</label>
            <input type="text" class="form-control" id="salario" name="salario" value="{{$medico->salario}}">
          </div>

          <div class="form-group col-md-4">
            <label for="updated_at">Ultima Atualização</label>
            <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{$medico->updated_at}}">
          </div>

        </fieldset>  
        </form>
  </div> 
  @endsection