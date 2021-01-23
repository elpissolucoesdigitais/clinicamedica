@extends('templates.template')

@section('content')

<!-- Página do crud  -->
    <div id="content" class="p-4 p-md-5 pt-5">
    <h1 class="text-center">Lista de Estoques Cadastrados</h1><hr>

    <div class="text-center">
        <a href="{{'estoque/create'}}">
            <button class="btn btn-success mt-3 mb-4">Cadastrar Estoque</button>
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
                <th scope="col">Administradora</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody>
                
                @foreach ($estoque as $estoques)
                    @php
                        //$paciente=$pacientes->find($pacientes->id)->relPacientes;
                        $administradora=$estoques->find($estoques->id)->relAdministradora;
                    @endphp
                    <tr>
                        
                        <td>{{$estoques->id}}</td>
                        <td>{{$estoques->nome}}</td>
                        <td>{{$estoques->descricao}}</td>
                        <td>{{$estoques->valor}}</td>
                        <td>{{$administradora->nome}}</td>
                        <td>
                            <a href="{{url("estoque/$estoques->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="{{url("estoque/$estoques->id/edit")}}">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <form action="{{route('estoque.destroy', $estoques->id)}}" method="POST">
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