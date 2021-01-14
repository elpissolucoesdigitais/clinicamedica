@extends('templates.template')

@section('content')
<!-- Página do crud  -->
<div id="content" class="p-4 p-md-5 pt-5">
  <h1 class="text-center">Clinica</h1><hr>
  @php
      //$paciente=$agenda->find($agenda->id)->relPacientes;
  @endphp
  <div class="col-8 m-auto">
      <form>
        <fieldset disabled>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="nome">Nome Clinica</label>
              <input type="text" class="form-control" id="nome" name="nome" value="{{$clinica->nome}}">
            </div>
           
          </div>
          <div class="form-row">
              <div class="form-group ">
              <label for="responsaveltecnico">Responsavel Tecnico</label>
              <input type="text" class="form-control" id="responsaveltecnico" name="responsaveltecnico" value="{{$clinica->responsaveltecnico}}">
              </div>
              <div class="form-group col-md-2">
                  <label for="logradouro">Logradouro</label>
                  <input type="text" class="form-control" id="logradouro" name="logradouro" value="{{$clinica->logradouro}}">
              </div>
              <div class="form-group col-md-7">
                  <label for="numero">Numero</label>
                  <input type="text" class="form-control" id="numero" name="numero" value="{{$clinica->numero}}">
              </div>
          </div>
          
          <div class="form-row">
            <div class="form-group ">
              <label for="cidade">Cidade</label>
              <input type="text" class="form-control" id="cidade" name="cidade" value="{{$clinica->cidade}}">
            </div>
            
            <div class="form-group col-md-2">
              <label for="bairro">Bairro</label>
              <input type="text" class="form-control" id="bairro" name="bairro" value="{{$clinica->bairro}}">
            </div>
            <div class="form-group col-md-2">
              <label for="cep">Cep</label>
              <input type="text" class="form-control" id="cep" name="cep" value="{{$clinica->cep}}">
            </div>
            <div class="form-group col-md-2">
              <label for="contato">Contato</label>
              <input type="text" class="form-control" id="contato" name="contato" value="{{$clinica->contato}}">
            </div>
            <div class="form-row">
            <div class="form-group col-md-3">
              <label for="criado">Criado</label>
              <input type="text" class="form-control" id="criado" name="criado" value="{{$clinica->created_at}}">
            </div>
            <div class="form-group col-md-4">
                <label for="uf">Uf</label>
                <input type="text" class="form-control" id="uf" name="uf" value="{{$clinica->uf}}">
              </div>
              <div class="form-group">
                <label for="foto">Foto da Clinica</label>
                <input type="text" class="form-control" id="foto" name="foto" value="{{$clinica->foto}}">
              </div>
            </div>
        

          </div>

          <div class="form-group">
            <label for="e-mail">E-mail</label>
            <input type="text" class="form-control" id="e-mail" name="e-mail" value="{{$clinica->email}}">
          </div>
          <div class="form-group">
            <label for="complemento">Complemento</label>
            <input type="text" class="form-control" id="complemento" name="complemento" value="{{$clinica->complemento}}">
          
            
        
        </div>  
              
        
        <div class="form-row">
        <div class="form-group">
            <label for="updated_at">Ultima Atualização</label>
            <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{$clinica->updated_at}}">
          </div>

          <div class="form-group col-md-4">
            <label for="cnpj">CNPJ</label>
            <input type="text" class="form-control" id="cnpj" name="cnpj" value="{{$clinica->cnpj}}">
          </div>
        </div>

          
          
          

        </fieldset>  
        </form>
  </div> 
  @endsection

  <!---Atributo Faltando: id--->