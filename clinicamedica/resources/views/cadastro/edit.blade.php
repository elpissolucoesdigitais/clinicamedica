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
  <form class="col-6 m-auto" action="{{url("cadastro/$cadastro->id")}}" name="formEdit" id="formEdit" method="POST">
      @method('PUT')
  @else
  <form class="col-6 m-auto" action="{{url('cadastro')}}" name="formCad" id="formCad" method="POST">

  @endif
  @csrf


<form class="col-6 m-auto">
  <h1 class="text-center">@if(isset($cadastro))Editar @else Cadastrar @endif</h1><hr>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nomePaciente">Paciente</label>
      <select class="form-control" type="text" name="nomePaciente" id="nomePaciente">
        <option value="{{$cadastro->relPaciente->id ?? ''}}">{{$cadastro->relPaciente->nome ?? 'Selecione'}}</option>
        @foreach ($paciente as $pacientes)
          <option value="{{$pacientes->id}}">{{$pacientes->nome}}</option>
        @endforeach

      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="fk_secretaria">Secretaria</label>
      <input type="integer" class="form-control" id="fk_secretaria" placeholder="Secretaria"
      name="fk_secretaria" value="{{$cadastro->fk_secretaria ?? ''}}">
    </div>
  </div>
  <div class="form-group">
    <label for="fk_administradora">Administradora</label>
    <input type="integer" class="form-control" id="fk_administradora" placeholder="Administradora"
    name="fk_administradora" value="{{$cadastro->fk_administradora ?? ''}}">
  </div>
  

  </div>
  
  <input class="btn btn-primary" type="submit" value="@if(isset($cadastro))Editar @else Cadastrar @endif">

</form>

<a href="{{url('cadastro')}}">
  <button class="btn btn-primary">Voltar</button>
</a>


@endsection