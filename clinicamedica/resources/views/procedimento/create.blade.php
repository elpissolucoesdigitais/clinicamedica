<!--<div class="input-group is-invalid">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="validatedInputGroupCustomFile" required>
    <label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label>
  </div>

-->
@extends('templates.template')

@section('content')
<form class="col-6 m-auto">
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
        <input type="text" class="form-control" id="nome" value="{{$procedimento->nome ?? ''}}">
      </div>
      <div class="form-group col-md-6">
        <label for="valor">valor</label>
        <input type="text" class="form-control" id="valor" value="{{$procedimento->valor ?? ''}}">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="descricao">Descrição</label>
        <input type="text" class="form-control" id="descricao" value="{{$procedimento->descricao ?? ''}}">
      </div>
    <div class="form-group">
      <div class="form-group col-md-6">
        <label for="secretaria">Secretaria</label>
        <input type="text" class="form-control" id="secretaria" value="{{$procedimento->fk_secretaria ?? ''}}">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="criado">Criado em</label>
        <input type="text" class="form-control" id="criado" value="{{$procedimento->created_at ?? ''}}">
        
      </div>
      <div class="form-group col-md-6">
        <label for="atualizado">Atualizado</label>
        <input type="text" class="form-control" id="atualizado" value="{{$procedimento->updated_at ?? ''}}">
    </div>
      
  
    <input class="btn btn-primary" type="submit" value="@if(isset($procedimento))Editar @else Cadastrar @endif">
    
  </form>

<<<<<<< Updated upstream
       
        <input class="form-control" type="text" name="nome" id="nome" placeholder="nome do procedimento"
         value="{{$procedimento->nome ?? ''}}" require>
        <input class="form-control" type="text" name="fk_secretaria" id="fk_secretaria" placeholder="" value="{{$procedimento->fk_secretaria ?? ''}}" require>
        <input class="form-control" type="text" name="Valor" id="Valor" placeholder="Valor" value="{{$procedimento->valor ?? ''}}" require>
        <input class="btn btn-primary" type="submit" value="@if(isset($procedimento))
        Editar @else Cadastrar @endif">
=======
    
  
>>>>>>> Stashed changes

  @endsection