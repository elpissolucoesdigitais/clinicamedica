@extends('templates.template')

@section('content')

<!-- Página do crud  -->
<div id="content" class="p-4 p-md-5 pt-5">
  <h1 class="text-center">Convênio {{$convenio->nome}} </h1><hr>
  @php
      //$convenio=$agenda->find($agenda->id)->relconvenios;
  @endphp
  <div class="col-8 m-auto">
      <form>
        <fieldset disabled>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="nomeconvenio">Nome convênio</label>
              <input type="text" class="form-control" id="nomeconvenio" name="nomeconvenio" value="{{$convenio->nome}}">
            </div>
           
          </div>
          <div class="form-row">
              <div class="form-group ">
              <label for="status">status</label>
              <input type="text" class="form-control" id="status" name="status" value="{{$convenio->status}}">
              </div>
              <div class="form-group col-md-2">
                  <label for="descricao">Descrição</label>
                  <input type="text" class="form-control" id="descricao" name="descricao" value="{{$convenio->descricao}}">
              </div>
              <div class="form-group col-md-7">
                  <label for="validade">Validade</label>
                  <input type="text" class="form-control" id="validade" name="validade" value="{{$convenio->validade}}">
              </div>
          </div>
          <div class="form-group">
            <label for="cnpj">CNPJ</label>
            <input type="text" class="form-control" id="cnpj" name="cnpj" value="{{$convenio->cnpj}}">
          </div>
          <div class="form-group ">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" id="email" name="email" value="{{$convenio->email}}">
          </div>
          <div class="form-row">
            
            
            <div class="form-group col-md-4">
              <label for="contato">Contato</label>
              <input type="text" class="form-control" id="contato" name="contato" value="{{$convenio->contato}}">
            </div>
            <div class="form-group col-md-2">
              <label for="valor">valor</label>
              <input type="text" class="form-control" id="valor" name="valor" value="{{$convenio->valor}}">
            </div>
            <div class="form-group col-md-3">
              <label for="criado">Criado</label>
              <input type="text" class="form-control" id="criado" name="criado" value="{{$convenio->created_at}}">
            </div>
          </div>  

          <div class="form-group">
            <label for="updated_at">Ultima Atualização</label>
            <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{$convenio->updated_at}}">
          </div>

        </fieldset>  
        </form>
  </div> 
  @endsection