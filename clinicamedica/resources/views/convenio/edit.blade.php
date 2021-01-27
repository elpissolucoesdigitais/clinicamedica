@extends('templates.template')

@section('content')

@if(isset($errors) && count($errors)>0)
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach ($errors->all() as $erro)
          {{$erro}}<br>
        @endforeach
    </div>
  @endif
  @if (isset($convenio))
  <form class="col-6 m-auto" action="{{url("convenio/$convenio->id")}}" name="formEdit" id="formEdit" method="POST">
      @method('PUT')
  @else
  <form class="col-6 m-auto" action="{{url('convenio')}}" name="formCad" id="formCad" method="POST">

  @endif
  @csrf

<form class="col-6 m-auto">
  <h1 class="text-center">@if(isset($convenio))Editar @else Cadastrar @endif</h1><hr>

  <div class="form-row">
    <div class="form-group col-md-6">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Email" name="email"
        value="{{$convenio->email ?? ''}}">
      </div>
    
  </div>
  


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" id="nome" placeholder="nome" name="nome"
      value="{{$convenio->nome ?? ''}}">
    </div>

    <div class="form-group col-md-6">
        <label for="descricao">Descricao</label>
        <input type="text" class="form-control" id="descricao" placeholder="descricao" name="descricao"
        value="{{$convenio->descricao ?? ''}}">
      </div>

      <div class="form-group col-md-4">
        <label for="status">Status</label>
        <select id="status" name="status" class="form-control">
          <option selected value="Ativo">Ativo</option>
          <option value="Inativo">Inativo</option>
        </select>
        
      </div>


      <div class="form-group col-md-6">
        <label for="validade">Validade</label>
        <input type="date" class="form-control" id="validade" placeholder="validade" name="validade"
        value="{{$convenio->validade ?? ''}}">
      </div>


      <div class="form-group col-md-7">
        <label for="cnpj">CNPJ</label>
        <input type="text" class="form-control" id="cnpj" placeholder="CNPJ" name="cnpj"
        value="{{$convenio->cnpj ?? ''}}">
      </div>

      <div class="form-group col-md-8">
        <label for="contato">Contato</label>
        <input type="text" class="form-control" id="contato" placeholder="Contato"
        name="contato" value="{{$convenio->contato ?? ''}}">
      </div>

      <div class="form-group col-md-12">
        <label for="valor">Valor</label>
        <input type="double" class="form-control" id="valor" placeholder="Valor"
        name="valor" value="{{$convenio->valor ?? ''}}">
      </div>
  
  </div>

  <input class="btn btn-primary" type="submit" value="@if(isset($convenio))Editar @else Cadastrar @endif">

</form>



<a href="{{url('convenio')}}">
  <button class="btn btn-primary">Voltar</button>
</a>


@endsection