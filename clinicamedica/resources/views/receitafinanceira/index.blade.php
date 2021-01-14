@extends('templates.template')

@section('content')

<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
        <div class="custom-menu">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
    </button>
</div>
      <div class="img bg-wrap text-center py-4" style="background-image: url(aseets/images/bg_1.jpg);">
          <div class="user-logo">
              <div class="img" style="background-image: url(assets/images/logo.jpg);"></div>
              <h3>Admin</h3>
          </div>
      </div>
<ul class="list-unstyled components mb-5">
  <li class="active">
    <a href="#"><span class="fa fa-home mr-3"></span> Home</a>
  </li>
  <li>
      <a href="#"><span class="fa fa-download mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span>Cadastro</a>
  </li>
  <li>
    <a href="#"><span class="fa fa-gift mr-3"></span>Relatório</a>
  </li>
  <li>
    <a href="#"><span class="fa fa-trophy mr-3"></span>Medicamento</a>
  </li>
  <li>
    <a href="#"><span class="fa fa-cog mr-3"></span>Exame</a>
  </li>
  <li>
    <a href="#"><span class="fa fa-support mr-3"></span>Suporte</a>
  </li>
  <li>
    <a href="#"><span class="fa fa-sign-out mr-3"></span>Sair</a>
  </li>
</ul>

</nav>


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
                        
                    @endphp
                    <tr>
                        
                        <td>{{$receitaFinanceiras->id}}</td>
                        <td>{{$receitaFinanceiras->fk_consulta}}</td>
                        <td>{{$receitaFinanceiras->fk_administradora}}</td>
                        <td>
                            <a href="{{url("receitaFinanceira/$receitaFinanceiras->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="{{url("receitaFinanceira/$receitaFinanceiras->id/edit")}}">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <a href="{{url("receitaFinanceira/$receitaFinanceiras->id")}}" class="js-del">
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