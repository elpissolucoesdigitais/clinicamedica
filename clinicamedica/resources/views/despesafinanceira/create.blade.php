@extends('templates.template')

@section('content')

@if(isset($errors) && count($errors)>0)
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach ($errors->all() as $erro)
          {{$erro}}<br>
        @endforeach
    </div>
  @endif
  @if (isset($despesafinanceira))
  <form class="col-6 m-auto" action="{{url("despesafinanceira/$despesafinanceira->id")}}" name="formEdit" id="formEdit" method="POST">
      @method('PUT')
  @else
  <form class="col-6 m-auto" action="{{url('despesafinanceira')}}" name="formCad" id="formCad" method="POST">

  @endif
  @csrf

<form class="col-6 m-auto">
  <h1 class="text-center">@if(isset($despesafinanceira))Editar @else Cadastrar @endif</h1><hr>

  <div class="form-row">
    <div class="form-group col-md-6">
        <label for="fk_medico">Medico</label>
        <input type="text" class="form-control" id="fk_medico" placeholder="Medico" name="fk_medico"
        value="{{$despesafinanceira->fk_medico ?? ''}}">
      </div>
    
  </div>
  


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="fk_tecnico_saude">Tecnico Saude</label>
      <input type="text" class="form-control" id="fk_tecnico_saude" placeholder="Tecnico Saude" name="fk_tecnico_saude"
      value="{{$despesafinanceira->fk_tecnico_saude ?? ''}}">
    </div>

    <div class="form-group col-md-6">
        <label for="fk_clinica">Clinica</label>
        <input type="text" class="form-control" id="fk_clinica" placeholder="Clinica" name="fk_clinica"
        value="{{$despesafinanceira->fk_clinica ?? ''}}">
      </div>


      <div class="form-group col-md-6">
        <label for="fk_secretaria">Secretaria</label>
        <input type="text" class="form-control" id="fk_secretaria" placeholder="Secretaria" name="fk_secretaria"
        value="{{$despesafinanceira->fk_secretaria ?? ''}}">
      </div>


      <div class="form-group col-md-7">
        <label for="fk_estoque">Estoque</label>
        <input type="text" class="form-control" id="fk_estoque" placeholder="Estoque" name="fk_estoque"
        value="{{$despesafinanceira->fk_estoque ?? ''}}">
      </div>

      <div class="form-group col-md-4">
        <label for="tipo">Tipo</label>
        <select id="tipo" name="tipo" class="form-control">
          <option selected value="Variável">Variável</option>
          <option value="Fixa">Fixa</option>
        </select>
        
      </div>

      

      
  
  </div>

  <input class="btn btn-primary" type="submit" value="@if(isset($despesafinanceira))Editar @else Cadastrar @endif">

</form>



<a href="{{url('despesafinanceira')}}">
  <button class="btn btn-primary">Voltar</button>
</a>


@endsection