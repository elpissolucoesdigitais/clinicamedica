@extends('templates.template')

@section('content')

<!-- Página do crud  -->
    <div id="content" class="p-4 p-md-5 pt-5">
    <h1 class="text-center">Lista de Despesas Financeiras Cadastrados</h1><hr>

    <div class="text-center">
        <a href="{{'despesafinanceira/create'}}">
            <button class="btn btn-success mt-3 mb-4">Cadastrar Despesa Financeira</button>
        </a>
    </div>

    <div class="col-12 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Fk_Medico</th></th></th>
                <th scope="col">Fk_Clinica</th>
                <th scope="col">Fk_Secretaria</th>
                <th scope="col">Fk_Estoque</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody>
                
                @foreach ($despesaFinanceira as $despesaFinanceiras)
                    @php
                        //$paciente=$pacientes->find($pacientes->id)->relPacientes;
                        $medico=$despesaFinanceiras->find($despesaFinanceiras->id)->relMedico;
                        $clinica=$despesaFinanceiras->find($despesaFinanceiras->id)->relClinica;
                        $secretaria=$despesaFinanceiras->find($despesaFinanceiras->id)->relSecretaria;
                        $estoque=$despesaFinanceiras->find($despesaFinanceiras->id)->relEstoque;
                    @endphp
                    <tr>
                        
                        <td>{{$despesaFinanceiras->id}}</td>
                        <td>{{$medico->nome}}</td>
                        <td>{{$clinica->nome}}</td>
                        <td>{{$secretaria->nome}}</td>
                        <td>{{$estoque->nome}}</td>
                        <td>
                            <a href="{{url("despesafinanceira/$despesaFinanceiras->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="{{url("despesafinanceira/$despesaFinanceiras->id/edit")}}">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <form action="{{route('despesafinanceira.destroy', $despesaFinanceiras->id)}}" method="POST">
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