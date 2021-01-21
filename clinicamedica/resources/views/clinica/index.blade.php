@extends('templates.template')

@section('content')
    
<!-- Página do crud  -->
    <div id="content" class="p-4 p-md-5 pt-5">
<h1 class="text-center">Lista de Clinicas Cadastrados</h1><hr>

    <div class="text-center">
        <a href="{{'clinica/create'}}">
            <button class="btn btn-success mt-3 mb-4">Cadastrar Clinica</button>
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
                <th scope="col">Cidade</th>
                <th scope="col">Contato</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody>
                
                @foreach ($clinica as $clinicas)
                    @php
                        //$paciente=$pacientes->find($pacientes->id)->relPacientes;
                        
                    @endphp
                    <tr>
                        
                        <td>{{$clinicas->id}}</td>
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
                            <form action="{{route('clinica.destroy', $clinicas->id)}}" method="POST">
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