@extends('templates.template')

@section('content')

<!-- Página do crud  -->
    <div id="content" class="p-4 p-md-5 pt-5">
<h1 class="text-center">Lista de Consultas Cadastrados</h1><hr>

    <div class="text-center">
        <a href="{{'consulta/create'}}">
            <button class="btn btn-success mt-3 mb-4">Cadastrar Consulta</button>
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
                <th scope="col">Procedimento</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody>
                
                @foreach ($consulta as $consultas)
                    @php
                        //$paciente=$pacientes->find($pacientes->id)->relPacientes;
                        
                        $procedimento=$consultas->find($consultas->id)->relProcedimento;

                    @endphp
                    <tr>
                        
                        <td>{{$consultas->id}}</td>
                        <td>{{$consultas->hora}}</td>
                        <td>{{$consultas->data}}</td>
                        <td>{{$consultas->valor}}</td>
                        <td>{{$procedimento->nome}}</td>
                        <td>
                            <a href="{{url("consulta/$consultas->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="{{url("consulta/$consultas->id/edit")}}">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <form action="{{route('consulta.destroy', $consultas->id)}}" method="POST">
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