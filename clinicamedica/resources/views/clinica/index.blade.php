@extends('templates.template')

@section('content')
    <h1 class="text-center">Lista de Clinicas Cadastrados</h1><hr>

    <div class="text-center">
        <a href="{{'clinica/create'}}">
            <button class="btn btn-success mt-3 mb-4">Cadastrar Clinicas</button>
        </a>
    </div>

    <div class="col-12 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Nome</th></th></th>
                <th scope="col">Email</th>
                <th scope="col">Cidade</th>
                <th scope="col">Contato</th>
              </tr>
            </thead>
            <tbody>
                
                @foreach ($clinica as $clinicas)
                    @php
                        //$paciente=$pacientes->find($pacientes->id)->relPacientes;
                        
                    @endphp
                    <tr>
                        
                        <td>{{$clinicas->nome}}</td>
                        <td>{{$clinicas->email}}</td>
                        <td>{{$clinicas->cidade}}</td>
                        <td>{{$clinicas->contato}}</td>
                        <td>
                            <a href="{{url("clinica/$clinicas->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="{{url("clinica/$clinicas->id/edit")}}">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <a href="{{url("clinica/$clinicas->id")}}" class="js-del">
                                <button class="btn btn-danger">Deletar</button>
                            </a>
                        </td>
                      </tr>
                @endforeach
                    
            </tbody>
          </table>
          
    </div>
@endsection