@extends('templates.template')

@section('content')

<!-- Página do crud  -->
    <div id="content" class="p-4 p-md-5 pt-5">
    <h1 class="text-center">Lista de Medicamentos Cadastrados</h1><hr>

    <div class="text-center">
        <a href="{{'medicamento/create'}}">
            <button class="btn btn-success mt-3 mb-4">Cadastrar Medicamento</button>
        </a>
    </div>

    <div class="col-12 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th></th></th>
                <th scope="col">Dose</th>
                <th scope="col">Descrição</th>
                <th scope="col">Fk_Medico</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody>
                
                @foreach ($medicamento as $medicamentos)
                    @php
                        //$paciente=$pacientes->find($pacientes->id)->relPacientes;
                        $medico=$medicamentos->find($medicamentos->id)->relMedico;
                    @endphp
                    <tr>
                        
                        <td>{{$medicamentos->id}}</td>
                        <td>{{$medicamentos->nome}}</td>
                        <td>{{$medicamentos->dose}}</td>
                        <td>{{$medicamentos->descricao}}</td>
                        <td>{{$medico->nome}}</td>
                        <td>
                            <a href="{{url("medicamento/$medicamentos->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="{{url("medicamento/$medicamentos->id/edit")}}">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <form action="{{route('medicamento.destroy', $medicamentos->id)}}" method="POST">
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