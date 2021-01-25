@extends('templates.template')

@section('content')

@if(isset($errors) && count($errors)>0)
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach ($errors->all() as $erro)
          {{$erro}}<br>
        @endforeach
    </div>
  @endif
  @if (isset($despesaFinanceira))
  <form class="col-6 m-auto" action="{{url("despesafinanceira/$despesaFinanceira->id")}}" name="formEdit" id="formEdit" method="POST">
      @method('PUT')
  @else
  <form class="col-6 m-auto" action="{{url('despesafinanceira')}}" name="formCad" id="formCad" method="POST">

  @endif
  @csrf

<form class="col-6 m-auto">
  <h1 class="text-center">@if(isset($despesaFinanceira))Editar @else Cadastrar @endif</h1><hr>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nomeMedico">Medico</label>
      <select class="form-control" type="text" name="nomeMedico" id="nomeMedico">
        <option value="{{$despesaFinanceira->relMedico->id ?? ''}}">{{$despesaFinanceira->relMedico->nome ?? 'Selecione'}}</option>
        @foreach ($medico as $medicos)
          <option value="{{$medicos->id}}">{{$medicos->nome}}</option>
        @endforeach

      </select>
      </div>
    
  </div>
  


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nomeTecnicoSaude">Tecnico de Saude</label>
      <select class="form-control" type="text" name="nomeTecnicoSaude" id="nomeTecnicoSaude">
        <option value="{{$despesaFinanceira->relTecnicoSaude->id ?? ''}}">{{$despesaFinanceira->relTecnicoSaude->nome ?? 'Selecione'}}</option>
        @foreach ($tecnicoSaude as $tecnicoSaudes)
          <option value="{{$tecnicoSaudes->id}}">{{$tecnicoSaudes->nome}}</option>
        @endforeach

      </select>
    </div>

    <div class="form-group col-md-6">
      <label for="nomeClinica">Clinica</label>
      <select class="form-control" type="text" name="nomeClinica" id="nomeClinica">
        <option value="{{$despesaFinanceira->relClinica->id ?? ''}}">{{$despesaFinanceira->relClinica->nome ?? 'Selecione'}}</option>
        @foreach ($clinica as $clinicas)
          <option value="{{$clinicas->id}}">{{$clinicas->nome}}</option>
        @endforeach

      </select>
      </div>


      <div class="form-group col-md-6">
        <label for="nomeSecretaria">Secretaria</label>
      <select class="form-control" type="text" name="nomeSecretaria" id="nomeSecretaria">
        <option value="{{$despesaFinanceira->relSecretaria->id ?? ''}}">{{$despesaFinanceira->relSecretaria->nome ?? 'Selecione'}}</option>
        @foreach ($secretaria as $secretarias)
          <option value="{{$secretarias->id}}">{{$secretarias->nome}}</option>
        @endforeach

      </select>
      </div>


      <div class="form-group col-md-7">
        <label for="nomeEstoque">Estoque</label>
      <select class="form-control" type="text" name="nomeEstoque" id="nomeEstoque">
        <option value="{{$despesaFinanceira->relEstoque->id ?? ''}}">{{$despesaFinanceira->relEstoque->nome ?? 'Selecione'}}</option>
        @foreach ($estoque as $estoques)
          <option value="{{$estoques->id}}">{{$estoques->nome}}</option>
        @endforeach

      </select>
      </div>

      <div class="form-group col-md-4">
        <label for="tipo">Tipo</label>
        <select id="tipo" name="tipo" class="form-control">
          <option selected value="Variável">Variável</option>
          <option value="Fixa">Fixa</option>
        </select>
        
      </div>

      

      
  
  </div>

  <input class="btn btn-primary" type="submit" value="@if(isset($despesaFinanceira))Editar @else Cadastrar @endif">

</form>



<a href="{{url('despesafinanceira')}}">
  <button class="btn btn-primary">Voltar</button>
</a>


@endsection