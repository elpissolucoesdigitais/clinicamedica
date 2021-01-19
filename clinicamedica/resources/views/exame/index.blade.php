@extends('templates.template')

@section('content')

<!-- Página do crud  -->
    <div id="content" class="p-4 p-md-5 pt-5">
    <h1 class="text-center">Lista de Exames Cadastrados</h1><hr>

    <div class="text-center">
        <a href="{{'exame/create'}}">
            <button class="btn btn-success mt-3 mb-4">Cadastrar Exame</button>
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
                <th scope="col">Paciente</th>
                <th scope="col">Consulta</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody>
                
                @foreach ($exame as $exames)
                    @php
                        //$paciente=$pacientes->find($pacientes->id)->relPacientes;
                        
                    @endphp
                    <tr>
                        
                        <td>{{$exames->id}}</td>
                        <td>{{$exames->nome}}</td>
                        <td>{{$exames->descricao}}</td>
                        <td>{{$exames->fk_paciente}}</td>
                        <td>{{$exames->fk_consulta}}</td>
                        <td>
                            <a href="{{url("exame/$exames->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="{{url("exame/$exames->id/edit")}}">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <a href="{{url("exame/$exames->id")}}" class="js-del">
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