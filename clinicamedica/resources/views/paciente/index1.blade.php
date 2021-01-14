@extends('templates.template')

@section('content')
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
                <th scope="col">#</th>
                <th scope="col">Paciente</th></th></th>
                <th scope="col">CPF</th>
                <th scope="col">RG</th>
                <th scope="col">E-mail</th>
                <th scope="col">Action</th>
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
                            <a href="{{url("paciente/$pacientes->id")}}" class="js-del">
                                <button class="btn btn-danger">Deletar</button>
                            </a>
                        </td>
                      </tr>
                @endforeach
                    
            </tbody>
          </table>
          
    </div>
@endsection