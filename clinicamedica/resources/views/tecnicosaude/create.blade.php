@extends('templates.template')

@section('content')
  
  @if(isset($errors) && count($errors)>0)
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach ($errors->all() as $erro)
          {{$erro}}<br>
        @endforeach
    </div>
  @endif
  @if (isset($tecnicoSaude))
  <form class="col-6 m-auto" action="{{url("tecnicosaude/$tecnicoSaude->id")}}" name="formEdit" id="formEdit" method="POST">
      @method('PUT')
  @else
  <form class="col-6 m-auto" action="{{url('tecnicosaude')}}" name="formCad" id="formCad" method="POST">

  @endif
  @csrf
  <h1 class="text-center">@if(isset($tecnicoSaude))Editar @else Cadastrar @endif</h1><hr>
  <p>Dados Pessoais:</p>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{$tecnicoSaude->nome ?? ''}}">
      </div>
      <div class="form-group col-md-6">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" id="cpf" name="cpf" value="{{$tecnicoSaude->cpf?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="rg">RG</label>
        <input type="text" class="form-control" id="rg" name="rg" value="{{$tecnicoSaude->rg ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="especialidade">especialidade</label>
        <input type="text" class="form-control" id="especialidade" name="especialidade" value="{{$tecnicoSaude->especialidade ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="contato">contato</label>
        <input type="text" class="form-control" id="contato" name="contato" value="{{$tecnicoSaude->contato ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="salario">Salario</label>
        <input type="text" class="form-control" id="salario" name="salario" value="{{$tecnicoSaude->salario ?? ''}}">
    </div>
    
    <div class="form-group col-md-6">
        <label for="complemento">E-mail</label>
        <input type="text" class="form-control" id="email" name="email" value="{{$tecnicoSaude->email ?? ''}}">
    </div>
    
    <div class="form-group col-md-6">
        <label for="complemento">Complemento</label>
        <input type="text" class="form-control" id="complemento" name="complemento" value="{{$tecnicoSaude->complemento ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="cep">Cep</label>
        <input type="text" class="form-control" id="cep" name="cep" value="{{$tecnicoSaude->cep ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="cidade">Cidade</label>
        <input type="text" class="form-control" id="cidade" name="cidade" value="{{$tecnicoSaude->cidade ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="bairro">Bairro</label>
        <input type="text" class="form-control" id="bairro" name="bairro" value="{{$tecnicoSaude->bairro ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="longradouro">Longradouro</label>
        <input type="text" class="form-control" id="longradouro" name="longradouro" value="{{$tecnicoSaude->longradouro ?? ''}}">
    </div>
    <!--Error: não envia para o banco-->
    <div class="form-group col-md-6">
        <label for="uf">UF</label>
        <input type="text" class="form-control" id="uf" name="uf" value="{{$tecnicoSaude->uf ??''}}">
    </div>
    <div class="input-group is-invalid">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="foto"  name="foto" >
          <label class="custom-file-label" for="foto">Envie uma foto</label>
        </div><br>
    
    <input class="btn btn-primary" type="submit" value="@if(isset($tecnicoSaude))Editar @else Cadastrar @endif"> 
  </form>
  <a href="{{url('tecnicosaude')}}">
    <button class="btn btn-primary">Voltar</button>
</a>
  @endsection