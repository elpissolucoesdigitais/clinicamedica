@extends('templates.template')

@section('content')


<!-- Página do crud  -->
    <div id="content" class="p-4 p-md-5 pt-5">
    <h1 class="text-center">Lista de Medicos Cadastrados</h1><hr>

    <div class="text-center">
        <a href="{{'medico/create'}}">
            <button class="btn btn-success mt-3 mb-4">Cadastrar Medico</button>
        </a>
    </div>

    <div class="col-12 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th></th></th>
                <th scope="col">Email</th>
                <th scope="col">Uf</th>
                <th scope="col">Contato</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody>
                
                @foreach ($medico as $medicos)
                    @php
                        //$paciente=$pacientes->find($pacientes->id)->relPacientes;
                        
                    @endphp
                    <tr>
                        
                        <td>{{$medicos->id}}</td>
                        <td>{{$medicos->nome}}</td>
                        <td>{{$medicos->email}}</td>
                        <td>{{$medicos->uf}}</td>
                        <td>{{$medicos->contato}}</td>
                        <td>
                            <a href="{{url("medico/$medicos->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="{{url("medico/$medicos->id/edit")}}">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <a href="{{url("medico/$medicos->id")}}" class="js-del">
                                <button class="btn btn-danger">Deletar</button>
                            </a>
                        </td>
                      </tr>
                @endforeach
                    
            </tbody>
          </table>
          
    </div>
</div>
@endsection