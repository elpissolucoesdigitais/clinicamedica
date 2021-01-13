@extends('templates.template')

@section('content')
    <h1 class="text-center">Lista de Administradoras Cadastrados</h1><hr>

    <div class="text-center">
        <a href="{{'administradora/create'}}">
            <button class="btn btn-success mt-3 mb-4">Cadastrar Administradora</button>
        </a>
    </div>

    <div class="col-12 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Nome</th></th></th>
                <th scope="col">Email</th>
                <th scope="col">CPF</th>
                <th scope="col">Contato</th>
              </tr>
            </thead>
            <tbody>
                
                @foreach ($administradora as $administradoras)
                    @php
                        //$paciente=$pacientes->find($pacientes->id)->relPacientes;
                        
                    @endphp
                    <tr>
                        
                        <td>{{$administradoras->nome}}</td>
                        <td>{{$administradoras->email}}</td>
                        <td>{{$administradoras->cpf}}</td>
                        <td>{{$administradoras->contato}}</td>
                        <td>
                            <a href="{{url("administradora/$administradoras->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="{{url("administradora/$administradoras->id/edit")}}">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <a href="{{url("administradora/$administradoras->id")}}" class="js-del">
                                <button class="btn btn-danger">Deletar</button>
                            </a>
                        </td>
                      </tr>
                @endforeach
                    
            </tbody>
          </table>
          
    </div>
@endsection