<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema Clinica</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/perfil.css')}}">
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/main.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
        <link rel="stylesheet" href="{{url('assets/style.css')}}">
       
</head>
<body>
    @section('sidebar')
            
            <div class="wrapper d-flex align-items-stretch">
                <nav id="sidebar">
                    <div class="custom-menu">
                        <button type="button" id="sidebarCollapse" class="btn btn-primary">
                </button>
            </div>
                  <div class="img bg-wrap text-center py-4" style="background-image: url(../assets/images/bg_1.jpg);">
                      <div class="user-logo">
                          <div class="img" style="background-image: url(../assets/images/user.PNG);"></div>
                          <h3>Admin</h3>
                      </div>
                  </div>
            <ul class="list-unstyled components mb-5">
              <li class="active">
                <a href="/home"><span class="fa fa-home mr-3"></span>Home</a>
              </li>
              <li>
                <!--reenviar no git-->
                  <a href="/cadastro"><span class="fas fa-calendar-plus mr-3"></span>Cadastro</a>
              </li>
              <li>
                <a href="/relatorio"><span class="fas fa-clipboard-list mr-3"></span>Relatório</a>
              </li>
              <li>
                <a href="/medicamento"><span class="fas fa-first-aid mr-3"></span>Medicamento</a>
              </li>
              <li>
                <a href="/exame"><span class="fas fa-file-medical mr-3"></span>Exame</a>
              </li>
              <li>
                <a href="/suporte"><span class="fas fa-cog mr-3"></span>Suporte</a>
              </li>
              <li>
                <a href="/sair"><span class="fas fa-sign-out-alt mr-3"></span>Sair</a>
              </li>
            </ul>
    
            </nav>
    @yield('content')

    <script src="{{url("assets/js/javascript.js")}}"></script>
    <script src="{{url("assets/js/jquery.min.js")}}"></script>
    <script src="{{url("assets/js/jquery-3.3.1.min.js")}}"></script>
    <script src="{{url("assets/js/jquery.mask.min.js")}}"></script>
    <script src="{{url("assets/js/popper.js")}}"></script>
    <script src="{{url("assets/js/bootstrap.min.js")}}"></script>
    <script src="{{url("assets/js/main.js")}}"></script>
    <script src="{{url("assets/fontawesome/js/all.min.js")}}"></script>
    
  
</body>
</html>


