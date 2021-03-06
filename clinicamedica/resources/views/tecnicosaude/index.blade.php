@extends('templates.template')

@section('content')

<!-- Página do crud  -->
    <div id="content" class="p-4 p-md-5 pt-5">
<h1 class="text-center">Lista de Tecnicos Saúde Cadastrados</h1><hr>

    <div class="text-center">
        <a href="{{'tecnicosaude/create'}}">
            <button class="btn btn-success mt-3 mb-4">Cadastrar Tecnico Saúde</button>
        </a>
    </div>

    <div class="col-12 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th></th></th>
                <th scope="col">CPF</th>
                <th scope="col">RG</th>
                <th scope="col">E-mail</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody>
                
                @foreach ($tecnicoSaude as $tecnicoSaudes)
                    @php
                        //$tecnicosaude=$tecnicoSaude->find($tecnicoSaude->id)->reltecnicoSaude;
                        
                    @endphp
                    <tr>
                        <th scope="row">{{$tecnicoSaudes->id}}</th>
                        <td>{{$tecnicoSaudes->nome}}</td>
                        <td>{{$tecnicoSaudes->cpf}}</td>
                        <td>{{$tecnicoSaudes->rg}}</td>
                        <td>{{$tecnicoSaudes->email}}</td>
                        <td>
                            <a href="{{url("tecnicosaude/$tecnicoSaudes->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="{{url("tecnicosaude/$tecnicoSaudes->id/edit")}}">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <form action="{{route('tecnicosaude.destroy', $tecnicoSaudes->id)}}" method="POST">
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