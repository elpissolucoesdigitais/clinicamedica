@extends('templates.template')

@section('content')
    <h1 class="text-center">Lista de Pacientes Cadastrados</h1><hr>

    <div class="text-center">
        <a href="{{'relatorioPaciente/create'}}">
            <button class="btn btn-success mt-3 mb-4">Cadastrar tecnicosaude</button>
        </a>
    </div>

    <div class="col-12 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th></th></th>
                <th scope="col">Descrição</th>
                <th scope="col">Médico</th>
                <th scope="col">Exame</th>
                <th scope="col">Action</th>
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
                            <a href="{{url("relatoriopaciente/$relatorioPacientes->id")}}" class="js-del">
                                <button class="btn btn-danger">Deletar</button>
                            </a>
                        </td>
                      </tr>
                @endforeach
                    
            </tbody>
          </table>
          
    </div>
@endsection