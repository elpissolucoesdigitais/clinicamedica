@extends('templates.template')

@section('content')


<!-- Página do crud  -->
    <div id="content" class="p-4 p-md-5 pt-5">
    <h1 class="text-center">Lista de Procedimentos Tecnicos Cadastrados</h1><hr>

    <div class="text-center">
        <a href="{{'procedimentotecnico/create'}}">
            <button class="btn btn-success mt-3 mb-4">Cadastrar Procedimento Tecnico</button>
        </a>
    </div>

    <div class="col-12 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Procedimento</th></th></th>
                <th scope="col">Tecnico Saude</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody>
                
                @foreach ($procedimentoTecnico as $procedimentoTecnicos)
                    @php
                        //$paciente=$pacientes->find($pacientes->id)->relPacientes;
                        $tecnicoSaude=$procedimentoTecnicos->find($procedimentoTecnicos->id)->relTecnicoSaude;

                        $procedimento=$procedimentoTecnicos->find($procedimentoTecnicos->id)->relProcedimento;
                    @endphp
                    <tr>
                        
                        <td>{{$procedimentoTecnicos->id}}</td>
                        <td>{{$procedimento->nome}}</td>
                        <td>{{$tecnicoSaude->nome}}</td>
                        <td>
                            <a href="{{url("procedimentotecnico/$procedimentoTecnicos->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="{{url("procedimentotecnico/$procedimentoTecnicos->id/edit")}}">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <form action="{{route('procedimentotecnico.destroy', $procedimentoTecnicos->id)}}" method="POST">
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