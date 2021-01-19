@extends('templates.template')

@section('content')
    
<!-- Página do crud  -->
    <div id="content" class="p-4 p-md-5 pt-5">
<h1 class="text-center">Lista de Secretarias Cadastrados</h1><hr>

    <div class="text-center">
        <a href="{{'secretaria/create'}}">
            <button class="btn btn-success mt-3 mb-4">Cadastrar Secretaria</button>
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
                <th scope="col">RG</th>
                <th scope="col">Contato</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody>
                
                @foreach ($secretaria as $secretarias)
                    @php
                        //$tecnicosaude=$tecnicoSaude->find($tecnicoSaude->id)->reltecnicoSaude;
                        
                    @endphp
                    <tr>
                        <th scope="row">{{$secretarias->id}}</th>
                        <td>{{$secretarias->nome}}</td>
                        <td>{{$secretarias->email}}</td>
                        <td>{{$secretarias->rg}}</td>
                        <td>{{$secretarias->contato}}</td>
                        <td>
                            <a href="{{url("secretaria/$secretarias->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="{{url("secretaria/$secretarias->id/edit")}}">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <a href="{{url("secretaria/$secretarias->id")}}" class="js-del">
                                <button class="btn btn-danger">Deletar</button>
                            </a>
                        </td>
                      </tr>
                @endforeach
                    
            </tbody>
          </table>
          
    </div>
</div>
@endsection