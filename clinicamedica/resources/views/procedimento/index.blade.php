@extends('templates.template')

@section('content')

<!-- Página do crud  -->
    <div id="content" class="p-4 p-md-5 pt-5">
    <h1 class="text-center">Lista de Procedimentos Cadastrados</h1><hr>

    <div class="text-center">
        <a href="{{'procedimento/create'}}">
            <button class="btn btn-success mt-3 mb-4">Cadastrar Procedimento</button>
        </a>
    </div>

    <div class="col-12 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th></th></th>
                <th scope="col">Descrição</th>
                <th scope="col">Valor</th>
                <th scope="col">Fk_Secretaria</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody>
                
                @foreach ($procedimento as $procedimentos)
                    @php
                        //$paciente=$pacientes->find($pacientes->id)->relPacientes;
                        
                    @endphp
                    <tr>
                        
                        <td>{{$procedimentos->id}}</td>
                        <td>{{$procedimentos->nome}}</td>
                        <td>{{$procedimentos->descricao}}</td>
                        <td>{{$procedimentos->valor}}</td>
                        <td>{{$procedimentos->fk_secretaria}}</td>
                        <td>
                            <a href="{{url("procedimento/$procedimentos->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="{{url("procedimento/$procedimentos->id/edit")}}">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <a href="{{url("procedimento/$procedimentos->id")}}" class="js-del">
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