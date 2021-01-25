@extends('templates.template')

@section('content')

@if(isset($errors) && count($errors)>0)
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach ($errors->all() as $erro)
          {{$erro}}<br>
        @endforeach
    </div>
  @endif
  @if (isset($consulta))
  <form class="col-6 m-auto" action="{{url("consulta/$consulta->id")}}" name="formEdit" id="formEdit" method="POST">
      @method('PUT')
  @else
  <form class="col-6 m-auto" action="{{url('consulta')}}" name="formCad" id="formCad" method="POST">

  @endif
  @csrf

<form class="col-6 m-auto">
  <h1 class="text-center">@if(isset($consulta))Editar @else Cadastrar @endif</h1><hr>

  <div class="form-row">
    <div class="form-group col-md-6">
        <label for="hora">Hora</label>
        <input type="time" class="form-control" id="hora" placeholder="hora" name="hora"
        value="{{$consulta->hora ?? ''}}">
      </div>
    <div class="form-group col-md-6">
      <label for="data">Data</label>
      <input type="date" class="form-control" id="data" placeholder="data" name="data"
      value="{{$consulta->data ?? ''}}">
    </div>
  </div>
  


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="valor">Valor</label>
      <input type="text" class="form-control" id="valor" placeholder="Valor" name="valor"
      value="{{$consulta->valor ?? ''}}">
    </div>

   
    <div class="form-group col-md-6">
      <label for="nomeProcedimento">Procedimento</label>
      <select class="form-control" type="text" name="nomeProcedimento" id="nomeProcedimento">
        <option value="{{$consulta->relProcedimento->id ?? ''}}">{{$consulta->relProcedimento->nome ?? 'Selecione'}}</option>
        @foreach ($procedimento as $procedimentos)
          <option value="{{$procedimentos->id}}">{{$procedimentos->nome}}</option>
        @endforeach

      </select>
      </div>


      <div class="form-group col-md-6">
        <label for="nomemedico">Medico</label>
      <select class="form-control" type="text" name="nomemedico" id="nomemedico">
        <option value="{{$consulta->relMedico->id ?? ''}}">{{$consulta->relMedico->nome ?? 'Selecione'}}</option>
        @foreach ($medico as $medicos)
          <option value="{{$medicos->id}}">{{$medicos->nome}}</option>
        @endforeach

      </select>
      </div>

    <div class="form-group col-md-4">
      <label for="status">Status</label>
      <select id="status" name="status" class="form-control">
        <option selected value="Ativo">Ativo</option>
        <option value="Inativo">Inativo</option>
      </select>
      
    </div>
  </div>


  
  <input class="btn btn-primary" type="submit" value="@if(isset($consulta))Editar @else Cadastrar @endif">

</form>



<a href="{{url('consulta')}}">
  <button class="btn btn-primary">Voltar</button>
</a>


@endsection