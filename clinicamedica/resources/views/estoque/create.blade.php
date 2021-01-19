@extends('templates.template')

@section('content')

@if(isset($errors) && count($errors)>0)
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach ($errors->all() as $erro)
          {{$erro}}<br>
        @endforeach
    </div>
  @endif
  @if (isset($estoque))
  <form class="col-6 m-auto" action="{{url("estoque/$estoque->id")}}" name="formEdit" id="formEdit" method="POST">
      @method('PUT')
  @else
  <form class="col-6 m-auto" action="{{url('estoque')}}" name="formCad" id="formCad" method="POST">

  @endif
  @csrf

<form class="col-6 m-auto">
  <h1 class="text-center">@if(isset($estoque))Editar @else Cadastrar @endif</h1><hr>

  <div class="form-row">
    <div class="form-group col-md-6">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome"
        value="{{$estoque->nome ?? ''}}">
      </div>
    
  </div>
  


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="descricao">Descrição</label>
      <input type="text" class="form-control" id="descricao" placeholder="Descrição" name="descricao"
      value="{{$estoque->descricao ?? ''}}">
    </div>

    <div class="form-group col-md-6">
        <label for="quantidade">Quantidade</label>
        <input type="number" class="form-control" id="quantidade" placeholder="Quantidade" name="quantidade"
        value="{{$estoque->quantidade ?? ''}}">
      </div>


      <div class="form-group col-md-6">
        <label for="valor">Valor</label>
        <input type="double" class="form-control" id="valor" placeholder="Valor" name="valor"
        value="{{$estoque->valor ?? ''}}">
      </div>


      <div class="form-group col-md-7">
        <label for="fk_administradora">Administradora</label>
        <input type="integer" class="form-control" id="fk_administradora" placeholder="Administradora" name="fk_administradora"
        value="{{$estoque->fk_administradora ?? ''}}">
      </div>

      <div class="form-group col-md-4">
        <label for="tipo">Tipo</label>
        <select id="tipo" name="tipo" class="form-control">
          <option selected value="Tipo 1">Tipo 1</option>
          <option value="Tipo 2">Tipo 2</option>
          <option value="Tipo 3">Tipo 3</option>
        </select>
        
      </div>

      

      
  
  </div>

  <input class="btn btn-primary" type="submit" value="@if(isset($estoque))Editar @else Cadastrar @endif">

</form>



<a href="{{url('estoque')}}">
  <button class="btn btn-primary">Voltar</button>
</a>


@endsection