@extends('templates.template')

@section('content')

<!-- Página do crud  -->
<div id="content" class="p-4 p-md-5 pt-5">
  <h1 class="text-center">Estoque {{$estoque->nome}} </h1><hr>
  @php
      //$convenio=$agenda->find($agenda->id)->relconvenios;
  @endphp
  <div class="col-8 m-auto">
      <form>
        <fieldset disabled>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="nomeestoque">Nome Estoque</label>
              <input type="text" class="form-control" id="nomeestoque" name="nomeestoque" value="{{$estoque->nome}}">
            </div>
           
          </div>
          <div class="form-row">
              <div class="form-group ">
              <label for="descricao">Descrição</label>
              <input type="text" class="form-control" id="descricao" name="descricao" value="{{$estoque->descricao}}">
              </div>
              <div class="form-group col-md-2">
                  <label for="quantidade">Quantidade</label>
                  <input type="text" class="form-control" id="quantidade" name="quantidade" value="{{$estoque->quantidade}}">
              </div>
              <div class="form-group col-md-7">
                  <label for="tipo">tipo</label>
                  <input type="text" class="form-control" id="tipo" name="tipo" value="{{$estoque->tipo}}">
              </div>
          </div>
          <div class="form-group">
            <label for="valor">valor</label>
            <input type="text" class="form-control" id="valor" name="valor" value="{{$estoque->valor}}">
          </div>
          <div class="form-group ">
            <label for="administradora ">Administradora</label>
            <input type="text" class="form-control" id="administradora " name="administradora " value="{{$estoque->fk_administradora }}">
          </div>
          <div class="form-row">
        
            <div class="form-group">
              <label for="criado">Criado</label>
              <input type="text" class="form-control" id="criado" name="criado" value="{{$estoque->created_at}}">
            </div>
            <div class="form-group col-md-5">
              <label for="updated_at">Ultima Atualização</label>
              <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{$estoque->updated_at}}">
            </div>
          </div>  
        </fieldset>  
        </form>
  </div> 
  @endsection