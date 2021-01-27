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
        value="{{old('nome')}}">
      </div>
    
  </div>
  


  <div class="form-row">

    <div class="form-group col-md-6">
        <label for="descricao">Descrição</label>
        <input type="text" class="form-control" id="descricao" placeholder="Descrição" name="descricao"
        value="{{old('descricao')}}">
      </div>


      <div class="form-group col-md-6">
        <label for="nomeMedicamento">Medicamento</label>
      <select class="form-control" type="text" name="nomeMedicamento" id="nomeMedicamento">
        <option value="{{$relatorioPaciente->relMedicamento->id ?? ''}}">{{$relatorioPaciente->relMedicamento->nome ?? 'Selecione'}}</option>
        @foreach ($medicamento as $medicamentos)
          <option value="{{$medicamentos->id}}">{{$medicamentos->nome}}</option>
        @endforeach

      </select>
      </div>

      <div class="form-group col-md-6">
        <label for="nomeMedico">Medico</label>
      <select class="form-control" type="text" name="nomeMedico" id="nomeMedico">
        <option value="{{$relatorioPaciente->relMedico->id ?? ''}}">{{$relatorioPaciente->relMedico->nome ?? 'Selecione'}}</option>
        @foreach ($medico as $medicos)
          <option value="{{$medicos->id}}">{{$medicos->nome}}</option>
        @endforeach

      </select>
      </div>

      <div class="form-group col-md-6">
        <label for="nomeTecnicoSaude">Tecnico de Saude</label>
      <select class="form-control" type="text" name="nomeTecnicoSaude" id="nomeTecnicoSaude">
        <option value="{{$relatorioPaciente->relTecnicoSaude->id ?? ''}}">{{$relatorioPaciente->relTecnicoSaude->nome ?? 'Selecione'}}</option>
        @foreach ($tecnicoSaude as $tecnicoSaudes)
          <option value="{{$tecnicoSaudes->id}}">{{$tecnicoSaudes->nome}}</option>
        @endforeach

      </select>
      </div>

      <div class="form-group col-md-6">
      <label for="nomeExame">Exame</label>
      <select class="form-control" type="text" name="nomeExame" id="nomeExame">
        <option value="{{$relatorioPaciente->relExame->id ?? ''}}">{{$relatorioPaciente->relExame->nome ?? 'Selecione'}}</option>
        @foreach ($exame as $exames)
          <option value="{{$exames->id}}">{{$exames->nome}}</option>
        @endforeach

      </select>
      </div>

      

  </div>

  <input class="btn btn-primary" type="submit" value="@if(isset($relatorioPaciente))Editar @else Cadastrar @endif">

</form>



<a href="{{url('relatoriopaciente')}}">
  <button class="btn btn-primary">Voltar</button>
</a>


@endsection