@extends('templates.template')

@section('content')
  
  @if(isset($errors) && count($errors)>0)
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach ($errors->all() as $erro)
          {{$erro}}<br>
        @endforeach
    </div>
  @endif
  @if (isset($procedimentoMedico))
  <form class="col-6 m-auto" action="{{url("procedimentomedico/$procedimentoMedico->id")}}" name="formEdit" id="formEdit" method="POST">
      @method('PUT')
  @else
  <form class="col-6 m-auto" action="{{url('procedimentomedico')}}" name="formCad" id="formCad" method="POST">

  @endif
  @csrf
  <h1 class="text-center">@if(isset($procedimentoMedico))Editar @else Cadastrar @endif</h1><hr>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="fk_procedimento">Procedimento</label>
        <input type="text" class="form-control" id="fk_procedimento" name="fk_procedimento" value="{{$procedimentoMedico->fk_procedimento ?? ''}}">
      </div>
      <div class="form-group col-md-6">
        <label for="fk_medico">Médico</label>
        <input type="text" class="form-control" id="fk_medico" name="fk_medico" value="{{$procedimentoMedico->fk_medico ?? ''}}">
    </div>
    
    <input class="btn btn-primary" type="submit" value="@if(isset($procedimentoMedico))Editar @else Cadastrar @endif"> 
  </form>
  <a href="{{url('procedimentoMedico')}}">
    <button class="btn btn-primary">Voltar</button>
</a>
  @endsection