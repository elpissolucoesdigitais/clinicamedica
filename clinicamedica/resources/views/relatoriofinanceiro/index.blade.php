@extends('templates.template')

@section('content')



<!-- Página do crud  -->
    <div id="content" class="p-4 p-md-5 pt-5">
    <h1 class="text-center">Lista de Relatorios Financeiros Cadastrados</h1><hr>

    <div class="text-center">
        <a href="{{'relatorioFinanceiro/create'}}">
            <button class="btn btn-success mt-3 mb-4">Cadastrar Relatorio Financeiro</button>
        </a>
    </div>

    <div class="col-12 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Fk_Despesa</th></th></th>
                <th scope="col">Fk_Administradora</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody>
                
                @foreach ($relatorioFinanceiro as $relatorioFinanceiros)
                    @php
                        //$paciente=$pacientes->find($pacientes->id)->relPacientes;
                        
                    @endphp
                    <tr>
                        
                        <td>{{$relatorioFinanceiros->id}}</td>
                        <td>{{$relatorioFinanceiros->fk_despesa}}</td>
                        <td>{{$relatorioFinanceiros->fk_administradora}}</td>
                        <td>
                            <a href="{{url("relatoriofinanceiro/$relatorioFinanceiros->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="{{url("relatoriofinanceiro/$relatorioFinanceiros->id/edit")}}">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <form action="{{route('relatoriofinanceiro.destroy', $relatorioFinanceiros->id)}}" method="POST">
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