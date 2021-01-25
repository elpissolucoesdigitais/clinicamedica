@extends('templates.template')

@section('content')
    
<!-- Página do crud  -->
<div id="content" class="p-4 p-md-5 pt-5">
<h1 class="text-center">Lista de Cadastros Cadastrados</h1><hr>

    <div class="text-center">
        <a href="{{'cadastro/create'}}">
            <button class="btn btn-success mt-3 mb-4">Cadastrar Cadastro</button>
        </a>
    </div>

    <div class="col-12 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Fk_Paciente</th></th></th>
                <th scope="col">Fk_Secretaria</th>
                <th scope="col">Fk_Administradora</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody>
                
                @foreach ($cadastro as $cadastros)
                    @php
                        //$paciente=$pacientes->find($pacientes->id)->relPacientes;
                        
                        $paciente=$cadastros->find($cadastros->id)->relPaciente;
                        $secretaria=$cadastros->find($cadastros->id)->relSecretaria;
                        $administradora=$cadastros->find($cadastros->id)->relAdministradora;

                    @endphp
                    <tr>
                        
                        <td>{{$cadastros->id}}</td>
                        <td>{{$paciente->nome}}</td>
                        <td>{{$secretaria->nome}}</td>
                        <td>{{$administradora->nome}}</td>
                        <td>
                            <a href="{{url("cadastro/$cadastros->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="{{url("cadastro/$cadastros->id/edit")}}">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <form action="{{route('cadastro.destroy', $cadastros->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>
                        </td>
                      </tr>
                @endforeach
                    
            </tbody>
          </table>
          
    </div>
</div>
@endsection