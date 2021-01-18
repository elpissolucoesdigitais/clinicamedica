@extends('templates.template')

@section('content')

<form class="col-6 m-auto">
  <h1 class="text-center">@if(isset($administradoras))Editar @else Cadastrar @endif</h1><hr>

  <div class="form-row">
    <div class="form-group col-md-6">
        <label for="Email">Email</label>
        <input type="email" class="form-control" id="Email" placeholder="Email"
        value="{{$administradoras->email ?? ''}}">
      </div>
    <div class="form-group col-md-6">
      <label for="Senha">Senha</label>
      <input type="password" class="form-control" id="Senha" placeholder="Senha"
      value="{{$administradoras->senha ?? ''}}">
    </div>
  </div>
  


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Longradouro">Longradouro</label>
      <input type="text" class="form-control" id="Longradouro" placeholder="Longradouro"
      value="{{$administradoras->longradouro ?? ''}}">
    </div>

    <div class="form-group col-md-6">
        <label for="Bairro">Bairro</label>
        <input type="text" class="form-control" id="Bairro" placeholder="Bairro"
        value="{{$administradoras->bairro ?? ''}}">
      </div>


      <div class="form-group col-md-6">
        <label for="CEP">CEP</label>
        <input type="integer" class="form-control" id="CEP" placeholder="CEP"
        value="{{$administradoras->cep ?? ''}}">
      </div>

    <div class="form-group col-md-4">
      <label for="UF">UF</label>
      <select id="UF" class="form-control">
        <option selected>RO</option>
        <option>AC</option>
        <option>AM</option>
        <option>RR</option>
        <option>PA</option>
        <option>AP</option>
        <option>TO</option>
        <option>MA</option>
        <option>PI</option>
        <option>CE</option>
        <option>RN</option>
        <option>PB</option>
        <option>PE</option>
        <option>AL</option>
        <option>SE</option>
        <option>BA</option>
        <option>MG</option>
        <option>ES</option>
        <option>RJ</option>
        <option>SP</option>
        <option>PR</option>
        <option>SC</option>
        <option>RS</option>
        <option>MS</option>
        <option>MT</option>
        <option>GO</option>
        <option>DF</option>
      </select>
      
    </div>

    <div class="form-group col-md-12">
        <label for="Nome">Nome</label>
        <input type="text" class="form-control" id="Nome" placeholder="Nome"
        value="{{$administradoras->nome ?? ''}}">
      </div>


      <div class="form-group col-md-4">
        <label for="inputSexo">Sexo</label>
        <select id="inputSexo" class="form-control">
          <option selected>Masculino</option>
          <option>Feminino</option>
        </select>
      </div>

      <div class="form-group col-md-7">
        <label for="CPF">CPF</label>
        <input type="text" class="form-control" id="CPF" placeholder="CPF"
        value="{{$administradoras->cpf ?? ''}}">
      </div>

      <div class="form-group col-md-6">
        <label for="RG">RG</label>
        <input type="text" class="form-control" id="RG" placeholder="RG"
        value="{{$administradoras->rg ?? ''}}">
      </div>

      <div class="form-group col-md-6">
        <label for="DataNascimento">Data de Nascimento</label>
        <input type="text" class="form-control" id="DataNascimento" placeholder="Data de Nascimento"
        value="{{$administradoras->datanascimento ?? ''}}">
      </div>

      <div class="form-group col-md-4">
        <label for="inputCidade">Cidade</label>
        <select id="inputCidade" class="form-control">
          <option selected>Rio Branco</option>
          <option>Maceió</option>
          <option>Macapá</option>
          <option>Manaus</option>
          <option>Salvador</option>
          <option>Fortaleza</option>
          <option>Brasília</option>
          <option>Vitória</option>
          <option>Goiânia</option>
          <option>São Luís</option>
          <option>Cuiabá</option>
          <option>Campo Grande</option>
          <option>Belo Horizonte</option>
          <option>Belém</option>
          <option>João Pessoa</option>
          <option>Curitiba</option>
          <option>Recife</option>
          <option>Teresina</option>
          <option>Rio de Janeiro</option>
          <option>Natal</option>
          <option>Porto Alegre</option>
          <option>Porto Velho</option>
          <option>Boa Vista</option>
          <option>Florianópolis</option>
          <option>São Paulo</option>
          <option>Aracaju</option>
          <option>Palmas</option>
        </select>
      </div>
      
      <div class="form-group col-md-8">
        <label for="Contato">Contato</label>
        <input type="text" class="form-control" id="Contato" placeholder="Contato"
        value="{{$administradoras->contato ?? ''}}">
      </div>

      <div class="form-group col-md-12">
        <label for="Complemento">Complemento</label>
        <input type="text" class="form-control" id="Complemento" placeholder="Complemento"
        value="{{$administradoras->complemento ?? ''}}">
      </div>

  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
  <a href="{{url('administradora')}}">
    <button class="btn btn-primary">Voltar</button>
  </a>
</form>


@endsection