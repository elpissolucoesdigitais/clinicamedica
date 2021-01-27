@extends('templates.template')

@section('content')

@if(isset($errors) && count($errors)>0)
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach ($errors->all() as $erro)
          {{$erro}}<br>
        @endforeach
    </div>
  @endif
  @if (isset($admin))
  <form class="col-6 m-auto" action="{{url("admin/$admin->id")}}" name="formEdit" id="formEdit" method="POST">
      @method('PUT')
  @else
  <form class="col-6 m-auto" action="{{url('admin')}}" name="formCad" id="formCad" method="POST">

  @endif
  @csrf

<form class="col-6 m-auto">
  <h1 class="text-center">@if(isset($admin))Editar @else Cadastrar @endif</h1><hr>

  <div class="form-row">
    <div class="form-group col-md-6">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Email" name="email"
        value="{{$admin->email ?? ''}}">
      </div>
    <div class="form-group col-md-6">
      <label for="senha">Senha</label>
      <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha"
      value="{{$admin->senha ?? ''}}">
    </div>
  </div>
  


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="longradouro">Longradouro</label>
      <input type="text" class="form-control" id="longradouro" placeholder="Longradouro"
      name="longradouro" value="{{$admin->longradouro ?? ''}}">
    </div>

    <div class="form-group col-md-6">
        <label for="crm">CRM</label>
        <input type="integer" class="form-control" id="crm" placeholder="crm"
        name="crm" value="{{$admin->crm ?? ''}}">
      </div>

    

    <div class="form-group col-md-6">
        <label for="bairro">Bairro</label>
        <input type="text" class="form-control" id="bairro" placeholder="Bairro"
        name="bairro" value="{{$admin->bairro ?? ''}}">
      </div>

      
      

      <div class="form-group col-md-6">
        <label for="cep">CEP</label>
        <input type="text" class="form-control" id="cep" placeholder="CEP" name="cep" value="{{$admin->cep ?? ''}}">
      </div>

      
      

      <div class="form-group col-md-4">
        <label for="uf">UF</label>
        <select id="uf" name="uf" class="form-control">
          <option selected value="RO">RO</option>
          <option value="AC">AC</option>
          <option value="AM">AM</option>
          <option value="RR">RR</option>
          <option value="PA">PA</option>
          <option value="AP">AP</option>
          <option value="TO">TO</option>
          <option value="MA">MA</option>
          <option value="PI">PI</option>
          <option value="CE">CE</option>
          <option value="RN">RN</option>
          <option value="PB">PB</option>
          <option value="PE">PE</option>
          <option value="AL">AL</option>
          <option value="SE">SE</option>
          <option value="BA">BA</option>
          <option value="MG">MG</option>
          <option value="ES">ES</option>
          <option value="RJ">RJ</option>
          <option value="SP">SP</option>
          <option value="PR">PR</option>
          <option value="SC">SC</option>
          <option value="RS">RS</option>
          <option value="MS">MS</option>
          <option value="MT">MT</option>
          <option value="GO">GO</option>
          <option value="DF">DF</option>
        </select>
        
      </div>

    <div class="form-group col-md-12">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" placeholder="Nome"
        name="nome" value="{{$admin->nome ?? ''}}">
      </div>


      <div class="form-group col-md-4">
        <label for="sexo">Sexo</label>
        <select id="sexo" name="sexo" class="form-control">
          <option selected value="Masculino">Masculino</option>
          <option value="Feminino">Feminino</option>
        </select>
      </div>


      <div class="form-group col-md-7">
        <label for="cpf">CPF</label>
        <input type="cpf" class="form-control" id="cpf" placeholder="CPF"
        name="cpf" value="{{$admin->cpf ?? ''}}">
      </div>

      <div class="form-group col-md-6">
        <label for="rg">RG</label>
        <input type="text" class="form-control" id="rg" placeholder="RG"
        name="rg" value="{{$admin->rg ?? ''}}">
      </div>

      <div class="form-group col-md-6">
        <label for="dataNascimento">Data de Nascimento</label>
        <input type="date" class="form-control" id="datanascimento" placeholder="Data de Nascimento"
        name="datanascimento" value="{{$admin->datanascimento ?? ''}}">
      </div>

      <div class="form-group col-md-4">
        <label for="cidade">Cidade</label>
        <select id="cidade" name="cidade" class="form-control">
          <option selected value="Rio Branco">Rio Branco</option>
          <option value="Maceió">Maceió</option>
          <option value="Macapá">Macapá</option>
          <option value="Manaus">Manaus</option>
          <option value="Salvador">Salvador</option>
          <option value="Fortaleza">Fortaleza</option>
          <option value="Brasília">Brasília</option>
          <option value="Vitória">Vitória</option>
          <option value="Goiânia">Goiânia</option>
          <option value="São Luís">São Luís</option>
          <option value="Cuiabá">Cuiabá</option>
          <option value="Campo Grande">Campo Grande</option>
          <option value="Belo Horizonte">Belo Horizonte</option>
          <option value="Belém">Belém</option>
          <option value="João Pessoa">João Pessoa</option>
          <option value="Curitiba">Curitiba</option>
          <option value="Recife">Recife</option>
          <option value="Teresina">Teresina</option>
          <option value="Rio de Janeiro">Rio de Janeiro</option>
          <option value="Natal">Natal</option>
          <option value="Porto Alegre">Porto Alegre</option>
          <option value="Porto Velho">Porto Velho</option>
          <option value="Boa Vista">Boa Vista</option>
          <option value="Florianópolis">Florianópolis</option>
          <option value="São Paulo">São Paulo</option>
          <option value="Aracaju">Aracaju</option>
          <option value="Palmas">Palmas</option>
        </select>
      </div>
      
      <div class="form-group col-md-8">
        <label for="contato">Contato</label>
        <input type="text" class="form-control" id="contato" placeholder="Contato"
        name="contato" value="{{$admin->contato ?? ''}}">
      </div>

      <div class="form-group col-md-12">
        <label for="complemento">Complemento</label>
        <input type="text" class="form-control" id="complemento" placeholder="Complemento"
        name="complemento" value="{{$admin->complemento ?? ''}}">
      </div>

      <div class="form-group col-md-12">
        <label for="salario">Salario</label>
        <input type="double" class="form-control" id="salario" placeholder="Salario"
        name="salario" value="{{$admin->salario ?? ''}}">
      </div>

  </div>
  
  <div class="input-group is-invalid">
    <div class="custom-file">
      <input type="file" class="custom-file-input" id="validatedInputGroupCustomFile"  name="foto" required>
      <label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label>
    </div>

</div>

<input class="btn btn-primary" type="submit" value="@if(isset($admin))Editar @else Cadastrar @endif">



</form>



<a href="{{url('admin')}}">
  <button class="btn btn-primary">Voltar</button>
</a>

@endsection
