@extends('templates.template')

@section('content')
  
  @if(isset($errors) && count($errors)>0)
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach ($errors->all() as $erro)
          {{$erro}}<br>
        @endforeach
    </div>
  @endif
  @if (isset($medico))
  <form class="col-6 m-auto" action="{{url("medico/$medico->id")}}" name="formEdit" id="formEdit" method="POST">
      @method('PUT')
  @else
  <form class="col-6 m-auto" action="{{url('medico')}}" name="formCad" id="formCad" method="POST">

  @endif
  @csrf
  <h1 class="text-center">@if(isset($medico))Editar @else Cadastrar @endif</h1><hr>
  <p>Dados Pessoais:</p>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{$medico->nome ?? ''}}">
      </div>
      <div class="form-group col-md-6">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" id="cpf" name="cpf" value="{{$medico->cpf?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="rg">RG</label>
        <input type="text" class="form-control" id="rg" name="rg" value="{{$medico->rg ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="especialidade">especialidade</label>
        <input type="text" class="form-control" id="especialidade" name="especialidade" value="{{$medico->especialidade ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="crm">CRM</label>
        <input type="text" class="form-control" id="crm" name="crm" value="{{$medico->crm ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="crmuf">CRM/UF</label>
        <input type="text" class="form-control" id="crmuf" name="crmuf" value="{{$medico->crmuf ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="contato">contato</label>
        <input type="text" class="form-control" id="contato" name="contato" value="{{$medico->contato ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="salario">Salario</label>
        <input type="text" class="form-control" id="salario" name="salario" value="{{$medico->salario ?? ''}}">
    </div>
    
    <div class="form-group col-md-6">
        <label for="complemento">E-mail</label>
        <input type="text" class="form-control" id="email" name="email" value="{{$medico->email ?? ''}}">
    </div>
    
    <div class="form-group col-md-6">
        <label for="complemento">Complemento</label>
        <input type="text" class="form-control" id="complemento" name="complemento" value="{{$medico->complemento ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="cep">Cep</label>
        <input type="text" class="form-control" id="cep" name="cep" value="{{$medico->cep ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="cidade">Cidade</label>
        <input type="text" class="form-control" id="cidade" name="cidade" value="{{$medico->cidade ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="bairro">Bairro</label>
        <input type="text" class="form-control" id="bairro" name="bairro" value="{{$medico->bairro ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="longradouro">Longradouro</label>
        <input type="text" class="form-control" id="longradouro" name="longradouro" value="{{$medico->longradouro ?? ''}}">
    </div>
    
    <div class="form-group col-md-6">
        <label for="uf">UF</label>
        <input type="text" class="form-control" id="uf" name="uf" value="{{$medico->uf ??''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="datanascimento">Data Nascimento</label>
        <input type="date" class="form-control" id="datanascimento" name="datanascimento" value="{{$medico->datanascimento ??''}}">
    </div>
    <div class="form-group col-md-4">
        <label for="sexo">Sexo</label>
        <select id="sexo" name="sexo" class="form-control">
          <option selected>{{$medico->sexo ??''}}</option>
          <option value="Masculino">Masculino</option>
          <option value="Feminino">Feminino</option>
        </select>
      </div>
    <div class="input-group is-invalid">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="foto"  name="foto" >
          <label class="custom-file-label" for="foto">Envie uma foto</label>
        </div><br>
    
    <input class="btn btn-primary" type="submit" value="@if(isset($medico))Editar @else Cadastrar @endif"> 
  </form>
  <a href="{{url('medico')}}">
    <button class="btn btn-primary">Voltar</button>
</a>
  @endsection