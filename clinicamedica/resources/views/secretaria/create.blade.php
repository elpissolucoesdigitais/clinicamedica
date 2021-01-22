@extends('templates.template')

@section('content')
  
  @if(isset($errors) && count($errors)>0)
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach ($errors->all() as $erro)
          {{$erro}}<br>
        @endforeach
    </div>
  @endif
  @if (isset($secretaria))
  <form class="col-6 m-auto" action="{{url("secretaria/$secretaria->id")}}" name="formEdit" id="formEdit" method="POST">
      @method('PUT')
  @else
  <form class="col-6 m-auto" action="{{url('secretaria')}}" name="formCad" id="formCad" method="POST">

  @endif
  @csrf
  <h1 class="text-center">@if(isset($secretaria))Editar @else Cadastrar @endif</h1><hr>
  <p>Dados Pessoais:</p>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{$secretaria->nome ?? ''}}">
      </div>
      <div class="form-group col-md-6">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" id="cpf" name="cpf" value="{{$secretaria->cpf ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="rg">RG</label>
        <input type="text" class="form-control" id="rg" name="rg" value="{{$secretaria->rg ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="sexo">Sexo</label>
        <input type="text" class="form-control" id="sexo" name="sexo" value="{{$secretaria->sexo ?? ''}}">
    </div>
    
    <div class="form-group col-md-6">
        <label for="contato">Contato</label>
        <input type="text" class="form-control" id="contato" name="contato" value="{{$secretaria->contato ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="salario">Salario</label>
        <input type="text" class="form-control" id="salario" name="salario" value="{{$secretaria->salario ?? ''}}">
    </div>
    
    <div class="form-group col-md-6">
        <label for="complemento">E-mail</label>
        <input type="text" class="form-control" id="email" name="email" value="{{$secretaria->email ?? ''}}">
    </div>
    
    <div class="form-group col-md-6">
        <label for="complemento">Complemento</label>
        <input type="text" class="form-control" id="complemento" name="complemento" value="{{$secretaria->complemento ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="cep">Cep</label>
        <input type="text" class="form-control" id="cep" name="cep" value="{{$secretaria->cep ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="cidade">Cidade</label>
        <input type="text" class="form-control" id="cidade" name="cidade" value="{{$secretaria->cidade ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="bairro">Bairro</label>
        <input type="text" class="form-control" id="bairro" name="bairro" value="{{$secretaria->bairro ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="longradouro">Longradouro</label>
        <input type="text" class="form-control" id="longradouro" name="longradouro" value="{{$secretaria->longradouro ?? ''}}">
    </div>
    <!--Error: não envia para o banco-->
    <div class="form-group col-md-6">
        <label for="uf">UF</label>
        <input type="text" class="form-control" id="uf" name="uf" value="{{$secretaria->uf ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="datanascimento">Data Nascimento</label>
        <input type="text" class="form-control" id="datanascimento" name="datanascimento" value="{{$secretaria->datanascimento ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="fk_clinica">Clinica</label>
        <input type="text" class="form-control" id="fk_clinica" name="fk_clinica" value="{{$secretaria->fk_clinica ??''}}">
    </div>
    <div class="input-group is-invalid">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="foto"  name="foto" >
          <label class="custom-file-label" for="foto">Envie uma foto</label>
        </div><br>
    
    <input class="btn btn-primary" type="submit" value="@if(isset($secretaria))Editar @else Cadastrar @endif"> 
  </form>
  <a href="{{url('secretaria')}}">
    <button class="btn btn-primary">Voltar</button>
</a>
  @endsection