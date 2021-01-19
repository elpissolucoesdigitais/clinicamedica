@extends('templates.template')

@section('content')

@if(isset($errors) && count($errors)>0)
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach ($errors->all() as $erro)
          {{$erro}}<br>
        @endforeach
    </div>
  @endif
  @if (isset($relatorioPaciente))
  <form class="col-6 m-auto" action="{{url("relatoriopaciente/$relatorioPaciente->id")}}" name="formEdit" id="formEdit" method="POST">
      @method('PUT')
  @else
  <form class="col-6 m-auto" action="{{url('relatoriopaciente')}}" name="formCad" id="formCad" method="POST">

  @endif
  @csrf

<form class="col-6 m-auto">
  <h1 class="text-center">@if(isset($relatorioPaciente))Editar @else Cadastrar @endif</h1><hr>

  <div class="form-row">
    <div class="form-group col-md-6">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome"
        value="{{$relatorioPaciente->nome ?? ''}}">
      </div>
    
  </div>
  


  <div class="form-row">

    <div class="form-group col-md-6">
        <label for="descricao">Descrição</label>
        <input type="text" class="form-control" id="descricao" placeholder="Descrição" name="descricao"
        value="{{$relatorioPaciente->descricao ?? ''}}">
      </div>


      <div class="form-group col-md-6">
        <label for="fk_medicamento">Medicamento</label>
        <input type="text" class="form-control" id="fk_medicamento" placeholder="Medicamento" name="fk_medicamento"
        value="{{$relatorioPaciente->fk_medicamento ?? ''}}">
      </div>

      <div class="form-group col-md-6">
        <label for="fk_medico">Medico</label>
        <input type="text" class="form-control" id="fk_medico" placeholder="Medico" name="fk_medico"
        value="{{$relatorioPaciente->fk_medico ?? ''}}">
      </div>

      <div class="form-group col-md-6">
        <label for="fk_tecnico_saude">Tecnico de Saude</label>
        <input type="text" class="form-control" id="fk_tecnico_saude" placeholder="Tecnico de Saude" name="fk_tecnico_saude"
        value="{{$relatorioPaciente->fk_tecnico_saude ?? ''}}">
      </div>

      <div class="form-group col-md-6">
        <label for="fk_exame">Exame</label>
        <input type="text" class="form-control" id="fk_exame" placeholder="Exame" name="fk_exame"
        value="{{$relatorioPaciente->fk_exame ?? ''}}">
      </div>

  </div>

  <input class="btn btn-primary" type="submit" value="@if(isset($relatorioPaciente))Editar @else Cadastrar @endif">

</form>



<a href="{{url('relatoriopaciente')}}">
  <button class="btn btn-primary">Voltar</button>
</a>


@endsection