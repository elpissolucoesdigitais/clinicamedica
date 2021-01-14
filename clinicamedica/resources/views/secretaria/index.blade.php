@extends('templates.template')

@section('content')
    <h1 class="text-center">Lista de Pacientes Cadastrados</h1><hr>

    <div class="text-center">
        <a href="{{'tecnicosaude/create'}}">
            <button class="btn btn-success mt-3 mb-4">Cadastrar tecnicosaude</button>
        </a>
    </div>

    <div class="col-12 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">tecnicosaude</th></th></th>
                <th scope="col">CPF</th>
                <th scope="col">RG</th>
                <th scope="col">E-mail</th>
                <th scope="col">Action</th>
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
                            <a href="{{url("tecnicosaude/$tecnicoSaudes->id")}}" class="js-del">
                                <button class="btn btn-danger">Deletar</button>
                            </a>
                        </td>
                      </tr>
                @endforeach
                    
            </tbody>
          </table>
          
    </div>
@endsection