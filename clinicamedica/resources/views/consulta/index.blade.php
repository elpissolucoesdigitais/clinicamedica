@extends('templates.template')

@section('content')
    <h1 class="text-center">Lista de Consultas Cadastrados</h1><hr>

    <div class="text-center">
        <a href="{{'consulta/create'}}">
            <button class="btn btn-success mt-3 mb-4">Cadastrar Consultas</button>
        </a>
    </div>

    <div class="col-12 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Id</th></th></th>
                <th scope="col">Hora</th>
                <th scope="col">Data</th>
                <th scope="col">Valor</th>
                <th scope="col">Fk_Procedimento</th>
              </tr>
            </thead>
            <tbody>
                
                @foreach ($consulta as $consultas)
                    @php
                        //$paciente=$pacientes->find($pacientes->id)->relPacientes;
                        
                    @endphp
                    <tr>
                        
                        <td>{{$consultas->id}}</td>
                        <td>{{$consultas->hora}}</td>
                        <td>{{$consultas->data}}</td>
                        <td>{{$consultas->valor}}</td>
                        <td>{{$consultas->fk_procedimento}}</td>
                        <td>
                            <a href="{{url("consulta/$consultas->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="{{url("consulta/$consultas->id/edit")}}">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <a href="{{url("consulta/$consultas->id")}}" class="js-del">
                                <button class="btn btn-danger">Deletar</button>
                            </a>
                        </td>
                      </tr>
                @endforeach
                    
            </tbody>
          </table>
          
    </div>
@endsection