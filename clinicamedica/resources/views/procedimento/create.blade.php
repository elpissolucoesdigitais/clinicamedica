@extends('templates.template')

@section('content')
  
  @if(isset($errors) && count($errors)>0)
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach ($errors->all() as $erro)
          {{$erro}}<br>
        @endforeach
    </div>
  @endif
  @if (isset($procedimento))
  <form class="col-6 m-auto" action="{{url("procedimento/$procedimento->id")}}" name="formEdit" id="formEdit" method="POST">
      @method('PUT')
  @else
  <form class="col-6 m-auto" action="{{url('procedimento')}}" name="formCad" id="formCad" method="POST">

  @endif
  @csrf
  <h1 class="text-center">@if(isset($procedimento))Editar @else Cadastrar @endif</h1><hr>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{old('nome')}}">
      </div>
      
      <div class="form-group col-md-6">
        <label for="valor">valor</label>
        <input type="text" class="form-control" id="valor" name="valor" value="{{old('valor')}}">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
          <label for="descricao">Descrição</label>
          <input type="text" class="form-control" id="descricao" name="descricao" value="{{old('descricao')}}">
        </div>
        <div class="form-group col-md-6">
          <label for="nomesecretaria">Secretaria</label>
      <select class="form-control" type="text" name="nomesecretaria" id="nomesecretaria">
        <option value="{{$procedimento->relSecretaria->id ?? ''}}">{{$procedimento->relSecretaria->nome ?? 'Selecione'}}</option>
        @foreach ($secretaria as $secretarias)
          <option value="{{$secretarias->id}}">{{$secretarias->nome}}</option>
        @endforeach

      </select>
        </div>
      </div>
    </div>
    <input class="btn btn-primary" type="submit" value="@if(isset($procedimento))Editar @else Cadastrar @endif"> 
  </form>
  <a href="{{url('procedimento')}}">
    <button class="btn btn-primary">Voltar</button>
</a>
  @endsection