@extends('templates.template')

@section('content')

<<<<<<< HEAD

=======
>>>>>>> 70724ed787246c2f470ab81b3dc1900496a5f493
<!-- Página do crud  -->
    <div id="content" class="p-4 p-md-5 pt-5">
    <h1 class="text-center">Lista de Receitas Financeiras Cadastrados</h1><hr>

    <div class="text-center">
        <a href="{{'receitaFinanceira/create'}}">
            <button class="btn btn-success mt-3 mb-4">Cadastrar Receita Financeira</button>
        </a>
    </div>

    <div class="col-12 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Fk_Consulta</th></th></th>
                <th scope="col">Fk_Administradora</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody>
                
                @foreach ($receitaFinanceira as $receitaFinanceiras)
                    @php
                        //$paciente=$pacientes->find($pacientes->id)->relPacientes;
                        $consulta=$receitaFinanceiras->find($receitaFinanceiras->id)->relConsulta;
                        $administradora=$receitaFinanceiras->find($receitaFinanceiras->id)->relAdministradora;
                    @endphp
                    <tr>
                        
                        <td>{{$receitaFinanceiras->id}}</td>
                        <td>{{$consulta->status}}</td>
                        <td>{{$administradora->nome}}</td>
                        <td>
                            <a href="{{url("receitafinanceira/$receitaFinanceiras->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="{{url("receitafinanceira/$receitaFinanceiras->id/edit")}}">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <form action="{{route('receitafinanceira.destroy', $receitaFinanceiras->id)}}" method="POST">
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