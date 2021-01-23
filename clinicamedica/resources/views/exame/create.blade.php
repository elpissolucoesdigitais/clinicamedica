@extends('templates.template')

@section('content')

@if(isset($errors) && count($errors)>0)
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach ($errors->all() as $erro)
          {{$erro}}<br>
        @endforeach
    </div>
  @endif
  @if (isset($exame))
  <form class="col-6 m-auto" action="{{url("exame/$exame->id")}}" name="formEdit" id="formEdit" method="POST">
      @method('PUT')
  @else
  <form class="col-6 m-auto" action="{{url('exame')}}" name="formCad" id="formCad" method="POST">

  @endif
  @csrf

<form class="col-6 m-auto">
  <h1 class="text-center">@if(isset($exame))Editar @else Cadastrar @endif</h1><hr>

  <div class="form-row">
    <div class="form-group col-md-6">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome"
        value="{{$exame->nome ?? ''}}">
      </div>
    
  </div>
  


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="descricao">Descrição</label>
      <input type="text" class="form-control" id="descricao" placeholder="Descrição" name="descricao"
      value="{{$exame->descricao ?? ''}}">
    </div>

    <div class="form-group col-md-6">
      <label for="nomepaciente">Paciente</label>
      <select class="form-control" type="text" name="nomepaciente" id="nomepaciente">
        <option value="{{$exame->relPaciente->id ?? ''}}">{{$exame->relPaciente->nome ?? 'Selecione'}}</option>
        @foreach ($paciente as $pacientes)
          <option value="{{$pacientes->id}}">{{$pacientes->nome}}</option>
        @endforeach

      </select>
      </div>


      <div class="form-group col-md-6">
        <label for="nomeconsulta">Consulta</label>
      <select class="form-control" type="text" name="nomeconsulta" id="nomeconsulta">
        <option value="{{$exame->relConsulta->id ?? ''}}">{{$exame->relConsulta->data ?? 'Selecione'}}</option>
        @foreach ($consulta as $consultas)
          <option value="{{$consultas->id}}">{{$consultas->data}}</option>
        @endforeach

      </select>
      </div>

  </div>

  <input class="btn btn-primary" type="submit" value="@if(isset($exame))Editar @else Cadastrar @endif">

</form>



<a href="{{url('exame')}}">
  <button class="btn btn-primary">Voltar</button>
</a>


@endsection