@extends('templates.template')

@section('content')

<!-- Página do crud  -->
    <div id="content" class="p-4 p-md-5 pt-5">
<h1 class="text-center">Lista de Relatorios Pacientes Cadastrados</h1><hr>

    <div class="text-center">
        <a href="{{'relatoriopaciente/create'}}">
            <button class="btn btn-success mt-3 mb-4">Cadastrar Relatorio Paciente</button>
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
                <th scope="col">Médico</th>
                <th scope="col">Exame</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody>
                
                @foreach ($relatorioPaciente as $relatorioPacientes)
                    @php
                        //$relatorioPaciente=$relatorioPaciente->find($relatorioPaciente->id)->relrelatorioPaciente;
                        
                    @endphp
                    <tr>
                        <th scope="row">{{$relatorioPacientes->id}}</th>
                        <td>{{$relatorioPacientes->nome}}</td>
                        <td>{{$relatorioPacientes->descricao}}</td>
                        <td>{{$relatorioPacientes->fk_medico }}</td>
                        <td>{{$relatorioPacientes->fk_exame }}</td>
                        <td>
                            <a href="{{url("relatoriopaciente/$relatorioPacientes->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="{{url("relatoriopaciente/$relatorioPacientes->id/edit")}}">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <form action="{{route('relatoriopaciente.destroy', $relatorioPacientes->id)}}" method="POST">
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