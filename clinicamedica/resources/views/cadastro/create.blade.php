@extends('templates.template')

@section('content')

<form class="col-6 m-auto">
  <h1 class="text-center">@if(isset($cadastros))Editar @else Cadastrar @endif</h1><hr>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Paciente">Paciente</label>
      <input type="integer" class="form-control" id="Paciente" placeholder="Paciente"
      value="{{$cadastros->fk_paciente ?? ''}}">
    </div>
    <div class="form-group col-md-6">
      <label for="Secretaria">Secretaria</label>
      <input type="integer" class="form-control" id="Secretaria" placeholder="Secretaria"
      value="{{$cadastros->fk_secretaria ?? ''}}">
    </div>
  </div>
  <div class="form-group">
    <label for="Administradora">Administradora</label>
    <input type="integer" class="form-control" id="Administradora" placeholder="Administradora"
    value="{{$cadastros->fk_administradora ?? ''}}">
  </div>
  

  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
  <a href="{{url('cadastro')}}">
    <button class="btn btn-primary">Voltar</button>
  </a>
</form>


@endsection