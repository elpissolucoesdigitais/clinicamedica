@extends('templates.template')

@section('content')

<!-- Página do crud  -->
<div id="content" class="p-4 p-md-5 pt-5">
  <h1 class="text-center">Secretaria {{$secretaria->nome}}</h1><hr>
  @php
      //$paciente=$agenda->find($agenda->id)->relPacientes;
  @endphp
  <div class="col-8 m-auto">
      <form>
        <fieldset disabled>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="nome">Nome da Secretaria</label>
              <input type="text" class="form-control" id="nome" name="nome" value="{{$secretaria->nome}}">
            </div>
           
          </div>
          <div class="form-row">
              
              <div class="form-group col-md-2">
                  <label for="longradouro">Longradouro</label>
                  <input type="text" class="form-control" id="longradouro" name="longradouro" value="{{$secretaria->longradouro}}">
              </div>
          </div>
          
          <div class="form-row">
            <div class="form-group ">
              <label for="cidade">Cidade</label>
              <input type="text" class="form-control" id="cidade" name="cidade" value="{{$secretaria->cidade}}">
            </div>
            
            <div class="form-group col-md-2">
              <label for="bairro">Bairro</label>
              <input type="text" class="form-control" id="bairro" name="bairro" value="{{$secretaria->bairro}}">
            </div>
            <div class="form-group col-md-2">
              <label for="cep">Cep</label>
              <input type="text" class="form-control" id="cep" name="cep" value="{{$secretaria->cep}}">
            </div>
            <div class="form-group col-md-2">
              <label for="contato">Contato</label>
              <input type="text" class="form-control" id="contato" name="contato" value="{{$secretaria->contato}}">
            </div>
            <div class="form-row">
            <div class="form-group col-md-3">
              <label for="criado">Criado</label>
              <input type="text" class="form-control" id="criado" name="criado" value="{{$secretaria->created_at}}">
            </div>
            <div class="form-group col-md-4">
                <label for="uf">Uf</label>
                <input type="text" class="form-control" id="uf" name="uf" value="{{$secretaria->uf}}">
              </div>
              <div class="form-group">
                <label for="foto">Foto da Clinica</label>
                <input type="text" class="form-control" id="foto" name="foto" value="{{$secretaria->foto}}">
              </div>
            </div>
        

          </div>

          <div class="form-group">
            <label for="e-mail">E-mail</label>
            <input type="text" class="form-control" id="e-mail" name="e-mail" value="{{$secretaria->email}}">
          </div>
          <div class="form-group">
            <label for="complemento">Complemento</label>
            <input type="text" class="form-control" id="complemento" name="complemento" value="{{$secretaria->complemento}}">
          
            
        
        </div>  
              
        
        <div class="form-row">
        <div class="form-group">
            <label for="updated_at">Ultima Atualização</label>
            <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{$secretaria->updated_at}}">
          </div>

          <div class="form-group col-md-4">
            <label for="sexo">Sexo</label>
            <input type="text" class="form-control" id="sexo" name="sexo" value="{{$secretaria->sexo}}">
          </div>
          <div class="form-group col-md-4">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" value="{{$secretaria->cpf}}">
          </div>
        </div>
        <div class="form-row">
        <div class="form-group">
            <label for="rg">RG</label>
            <input type="text" class="form-control" id="rg" name="rg" value="{{$secretaria->rg}}">
          </div>
          <div class="form-group col-md-5">
            <label for="datanascimento">Data de Nascimento</label>
            <input type="text" class="form-control" id="datanascimento" name="datanascimento" value="{{$secretaria->datanascimento}}">
          </div>
            

        </div>

        <div class="form-row">
        <div class="form-group">
            <label for="salario">Salario</label>
            <input type="text" class="form-control" id="salario" name="salario" value="{{$secretaria->salario}}">
          </div>
          <div class="form-group col-md-5">
            <label for="fk_clinica">Clinica</label>
            <input type="text" class="form-control" id="fk_clinica" name="fk_clinica" value="{{$secretaria->fk_clinica}}">
          </div>
        </div>
          
          
          

        </fieldset>  
        </form>
  </div> 
  @endsection
