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
        value="{{old('hora')}}">
      </div>
    <div class="form-group col-md-6">
      <label for="data">Data</label>
      <input type="date" class="form-control" id="data" placeholder="data" name="data"
      value="{{old('data')}}">
    </div>
  </div>
  


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="valor">Valor</label>
      <input type="text" class="form-control" id="valor" placeholder="Valor" name="valor"
      value="{{old('valor')}}">
    </div>

   
    <div class="form-group col-md-6">
      <label for="fk_procedimento">Procedimento</label>
      <select id="fk_procedimento" type="text" name="fk_procedimento" class="form-control">
        <option select>{{old('fk_procedimento')}}</option>
        @foreach ($procedimento as $procedimentos)
          <option>{{$procedimentos->nome}}</option>
        @endforeach
      

      </select>
      </div>


      <div class="form-group col-md-6">
        <label for="fk_medico">Medico</label>
      <select class="form-control" type="text" name="fk_medico" id="fk_medico">
        <option select>{{old('fk_medico')}}</option>
        @foreach ($medico as $medicos)
          <option>{{$medicos->nome}}</option>
        @endforeach

      </select>
      </div>

    <div class="form-group col-md-4">
      <label for="status">Status</label>
      <select id="status" name="status" class="form-control">
        <option selected>{{old('status')}}</option>
        <option value="Ativo">Ativo</option>
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