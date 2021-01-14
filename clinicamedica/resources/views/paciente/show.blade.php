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
    </div>
  @endsection