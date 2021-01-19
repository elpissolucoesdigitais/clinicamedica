@extends('templates.template')

@section('content')

@if(isset($errors) && count($errors)>0)
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach ($errors->all() as $erro)
          {{$erro}}<br>
        @endforeach
    </div>
  @endif
  @if (isset($medicamento))
  <form class="col-6 m-auto" action="{{url("medicamento/$medicamento->id")}}" name="formEdit" id="formEdit" method="POST">
      @method('PUT')
  @else
  <form class="col-6 m-auto" action="{{url('medicamento')}}" name="formCad" id="formCad" method="POST">

  @endif
  @csrf

<form class="col-6 m-auto">
  <h1 class="text-center">@if(isset($medicamento))Editar @else Cadastrar @endif</h1><hr>

  <div class="form-row">
    <div class="form-group col-md-6">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome"
        value="{{$medicamento->nome ?? ''}}">
      </div>
    
  </div>
  


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="dose">Dose</label>
      <input type="text" class="form-control" id="dose" placeholder="Dose" name="dose"
      value="{{$medicamento->dose ?? ''}}">
    </div>

    <div class="form-group col-md-6">
        <label for="descricao">Descrição</label>
        <input type="text" class="form-control" id="descricao" placeholder="Descrição" name="descricao"
        value="{{$medicamento->descricao ?? ''}}">
      </div>


      <div class="form-group col-md-6">
        <label for="fk_medico">Medico</label>
        <input type="text" class="form-control" id="fk_medico" placeholder="Medico" name="fk_medico"
        value="{{$medicamento->fk_medico ?? ''}}">
      </div>

  </div>

  <input class="btn btn-primary" type="submit" value="@if(isset($medicamento))Editar @else Cadastrar @endif">

</form>



<a href="{{url('medicamento')}}">
  <button class="btn btn-primary">Voltar</button>
</a>


@endsection