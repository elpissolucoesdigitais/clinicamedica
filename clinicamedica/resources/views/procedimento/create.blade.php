<!--<div class="input-group is-invalid">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="validatedInputGroupCustomFile" required>
    <label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label>
  </div>

-->
@extends('templates.template')

@section('content')
  <h1 class="text-center">@if(isset($procedimento))Editar @else Cadastrar @endif</h1><hr>
  @if(isset($errors) && count($errors)>0)
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach ($errors->all() as $erro)
          {{$erro}}<br>
        @endforeach
    </div>
  @endif
  @if (isset($procedimento))
  <form action="{{url("procedimento/$procedimento->id")}}" name="formEdit" id="formEdit" method="POST">
      @method('PUT')
  @else
  <form action="{{url('procedimento')}}" name="formCad" id="formCad" method="POST">

  @endif
  @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{$procedimento->nome ?? ''}}">
      </div>
      <div class="form-group col-md-6">
        <label for="valor">valor</label>
        <input type="text" class="form-control" id="valor" name="valor" value="{{$procedimento->valor ?? ''}}">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
          <label for="descricao">Descrição</label>
          <input type="text" class="form-control" id="descricao" name="descricao" value="{{$procedimento->descricao ?? ''}}">
        </div>
      <div class="form-group">
        <div class="form-group col-md-6">
          <label for="k_secretaria">Secretaria</label>
          <input type="text" class="form-control" id="k_secretaria" name="fk_secretaria" value="{{$procedimento->fk_secretaria ?? ''}}">
        </div>
      </div>
    
    </div>
      
  
    <input class="btn btn-primary" type="submit" value="@if(isset($procedimento))Editar @else Cadastrar @endif">
    
  </form>

  @endsection