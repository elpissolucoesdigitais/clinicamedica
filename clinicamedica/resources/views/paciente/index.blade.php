@extends('templates.template')

@section('content')
		

        <!-- Página do crud  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <h1 class="text-center">Lista de Pacientes Cadastrados</h1><hr>

        <div class="text-center">
            <a href="{{'paciente/create'}}">
                <button class="btn btn-success mt-3 mb-4">Cadastrar Paciente</button>
            </a>
        </div>

    <div class="col-12 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Paciente</th></th></th>
                <th scope="col">CPF</th>
                <th scope="col">RG</th>
                <th scope="col">E-mail</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody>
                
                @foreach ($paciente as $pacientes)
                    @php
                        //$paciente=$pacientes->find($pacientes->id)->relPacientes;
                        
                    @endphp
                    <tr>
                        <th scope="row">{{$pacientes->id}}</th>
                        <td>{{$pacientes->nome}}</td>
                        <td>{{$pacientes->cpf}}</td>
                        <td>{{$pacientes->rg}}</td>
                        <td>{{$pacientes->email}}</td>
                        <td>
                            <a href="{{url("paciente/$pacientes->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="{{url("paciente/$pacientes->id/edit")}}">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <form action="{{route('paciente.destroy', $pacientes->id)}}" method="POST">
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