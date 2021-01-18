@extends('templates.template')

@section('content')

<form class="col-6 m-auto">
  <h1 class="text-center">@if(isset($cadastros))Editar @else Cadastrar @endif</h1><hr>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPaciente">Paciente</label>
      <input type="text" class="form-control" id="inputPaciente" placeholder="Paciente">
    </div>
    <div class="form-group col-md-6">
      <label for="inputSecretaria">Secretaria</label>
      <input type="text" class="form-control" id="inputSecretaria" placeholder="Secretaria">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAdministradora">Administradora</label>
    <input type="text" class="form-control" id="inputAdministradora" placeholder="Administradora">
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