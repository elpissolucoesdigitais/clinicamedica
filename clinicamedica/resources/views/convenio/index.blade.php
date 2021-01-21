@extends('templates.template')

@section('content')
  
<!-- Página do crud  -->
    <div id="content" class="p-4 p-md-5 pt-5">
<h1 class="text-center">Lista de Convenios Cadastrados</h1><hr>

    <div class="text-center">
        <a href="{{'convenio/create'}}">
            <button class="btn btn-success mt-3 mb-4">Cadastrar Convenio</button>
        </a>
    </div>

    <div class="col-12 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Id</th></th></th>
                <th scope="col">Email</th>
                <th scope="col">Nome</th>
                <th scope="col">Contato</th>
                <th scope="col">Valor</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody>
                
                @foreach ($convenio as $convenios)
                    @php
                        //$paciente=$pacientes->find($pacientes->id)->relPacientes;
                        
                    @endphp
                    <tr>
                        
                        <td>{{$convenios->id}}</td>
                        <td>{{$convenios->email}}</td>
                        <td>{{$convenios->nome}}</td>
                        <td>{{$convenios->contato}}</td>
                        <td>{{$convenios->valor}}</td>
                        <td>
                            <a href="{{url("convenio/$convenios->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="{{url("convenio/$convenios->id/edit")}}">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <form action="{{route('convenio.destroy', $convenios->id)}}" method="POST">
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