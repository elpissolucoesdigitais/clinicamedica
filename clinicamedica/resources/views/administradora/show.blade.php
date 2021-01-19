@extends('templates.template')

@section('content')

<!-- Página do crud  -->
<div id="content" class="p-4 p-md-5 pt-5">
  <h1 class="text-center">Administradora</h1><hr>
  @php
      //$paciente=$agenda->find($agenda->id)->relPacientes;
  @endphp
  <div class="col-8 m-auto">
      <form>
        <fieldset disabled>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="nome">Nome Administradora</label>
              <input type="text" class="form-control" id="nome" name="nome" value="{{$administradora->nome}}">
            </div>
           
          </div>
          <div class="form-row">
              <div class="form-group ">
              <label for="rg">RG</label>
              <input type="text" class="form-control" id="rg" name="rg" value="{{$administradora->rg}}">
              </div>
              <div class="form-group col-md-2">
                  <label for="datanascimento">Nascimento</label>
                  <input type="text" class="form-control" id="datanascimento" name="datanascimento" value="{{$administradora->datanascimento}}">
              </div>
              <div class="form-group col-md-7">
                  <label for="cpf">CPF</label>
                  <input type="text" class="form-control" id="cpf" name="cpf" value="{{$administradora->cpf}}">
              </div>
          </div>
          <div class="form-group">
            <label for="sexo">Sexo</label>
            <input type="text" class="form-control" id="sexo" name="sexo" value="{{$administradora->sexo}}">
          </div>
          <div class="form-row">
            <div class="form-group ">
              <label for="cidade">Cidade</label>
              <input type="text" class="form-control" id="cidade" name="cidade" value="{{$administradora->cidade}}">
            </div>
            
            <div class="form-group col-md-2">
              <label for="bairro">Bairro</label>
              <input type="text" class="form-control" id="bairro" name="bairro" value="{{$administradora->bairro}}">
            </div>
            <div class="form-group col-md-2">
              <label for="cep">Cep</label>
              <input type="text" class="form-control" id="cep" name="cep" value="{{$administradora->cep}}">
            </div>
            <div class="form-group col-md-2">
              <label for="contato">Contato</label>
              <input type="text" class="form-control" id="contato" name="contato" value="{{$administradora->contato}}">
            </div>
            <div class="form-group col-md-3">
              <label for="criado">Criado</label>
              <input type="text" class="form-control" id="criado" name="criado" value="{{$administradora->created_at}}">
            </div>
        

          </div>

          <div class="form-group">
            <label for="e-mail">E-mail</label>
            <input type="text" class="form-control" id="e-mail" name="e-mail" value="{{$administradora->email}}">
          </div>
          <div class="form-group">
            <label for="complemento">Complemento</label>
            <input type="text" class="form-control" id="complemento" name="complemento" value="{{$administradora->complemento}}">
          
            
        
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="salario">Salario</label>
                <input type="text" class="form-control" id="salario" name="salario" value="{{$administradora->salario}}">
              </div>
              <div class="form-group col-md-4">
                <label for="longradouro">Longradouro</label>
                <input type="text" class="form-control" id="longradouro" name="longradouro" value="{{$administradora->longradouro}}">
              </div>
              <div class="form-group col-md-4">
                <label for="uf">Uf</label>
                <input type="text" class="form-control" id="uf" name="uf" value="{{$administradora->uf}}">
              </div>
        </div>

        <div class="form-row">
        <div class="form-group">
            <label for="updated_at">Ultima Atualização</label>
            <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{$administradora->updated_at}}">
          </div>

          <div class="form-group col-md-5">
            <label for="foto">Foto da Administradora</label>
            <input type="text" class="form-control" id="foto" name="foto" value="{{$administradora->foto}}">
          </div>
        </div>
          

        </fieldset>  
        </form>
  </div> 
  @endsection

