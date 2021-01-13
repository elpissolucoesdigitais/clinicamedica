@extends('templates.template')

@section('content')
    <h1 class="text-center">Lista de Cadastros Cadastrados</h1><hr>

    <div class="text-center">
        <a href="{{'cadastro/create'}}">
            <button class="btn btn-success mt-3 mb-4">Cadastrar Cadastro</button>
        </a>
    </div>

    <div class="col-12 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Fk_Paciente</th></th></th>
                <th scope="col">Fk_Secretaria</th>
                <th scope="col">Fk_Administradora</th>
              </tr>
            </thead>
            <tbody>
                
                @foreach ($cadastro as $cadastros)
                    @php
                        //$paciente=$pacientes->find($pacientes->id)->relPacientes;
                        
                    @endphp
                    <tr>
                        
                        <td>{{$cadastros->fk_paciente}}</td>
                        <td>{{$cadastros->fk_secretaria}}</td>
                        <td>{{$cadastros->fk_administradora}}</td>
                        <td>
                            <a href="{{url("cadastro/$cadastros->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="{{url("cadastro/$cadastros->id/edit")}}">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <a href="{{url("cadastro/$cadastros->id")}}" class="js-del">
                                <button class="btn btn-danger">Deletar</button>
                            </a>
                        </td>
                      </tr>
                @endforeach
                    
            </tbody>
          </table>
          
    </div>
@endsection