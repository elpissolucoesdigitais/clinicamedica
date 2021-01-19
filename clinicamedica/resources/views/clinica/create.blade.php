@extends('templates.template')

@section('content')

<form class="col-6 m-auto">
  <h1 class="text-center">@if(isset($clinicas))Editar @else Cadastrar @endif</h1><hr>

  <div class="form-row">
    <div class="form-group col-md-6">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Email" name="nome"
        value="{{$clinicas->email ?? ''}}">
      </div>
    <div class="form-group col-md-6">
      <label for="senha">Senha</label>
      <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha"
      value="{{$clinicas->senha ?? ''}}">
    </div>
  </div>
  


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="longradouro">Longradouro</label>
      <input type="text" class="form-control" id="longradouro" placeholder="Longradouro" name="longradouro"
      value="{{$clinicas->logradouro ?? ''}}">
    </div>

    <div class="form-group col-md-6">
        <label for="bairro">Bairro</label>
        <input type="text" class="form-control" id="bairro" placeholder="Bairro" name="bairro"
        value="{{$clinicas->bairro ?? ''}}">
      </div>


      <div class="form-group col-md-6">
        <label for="cep">CEP</label>
        <input type="integer" class="form-control" id="cep" placeholder="CEP" name="cep"
        value="{{$clinicas->cep ?? ''}}">
      </div>

    <div class="form-group col-md-4">
      <label for="uf">UF</label>
      <select id="uf" class="form-control">
        <option selected>RO</option>
        <option value="AC">AC</option>
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
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome"
        value="{{$clinicas->nome ?? ''}}">
      </div>

      <div class="form-group col-md-7">
        <label for="cnpj">CNPJ</label>
        <input type="text" class="form-control" id="cnpj" placeholder="CNPJ" name="cnpj"
        value="{{$clinicas->cnpj ?? ''}}">
      </div>

      <div class="form-group col-md-6">
        <label for="numero">Numero</label>
        <input type="integer" class="form-control" id="numero" placeholder="Numero" name="numero"
        value="{{$clinicas->numero ?? ''}}">
      </div>

      <div class="form-group col-md-6">
        <label for="responsaveltecnico">Responsavel Tecnico</label>
        <input type="text" class="form-control" id="responsaveltecnico" placeholder="Responsavel Tecnico"
        name="responsaveltecnico" value="{{$clinicas->responsaveltecnico ?? ''}}">
      </div>

      <div class="form-group col-md-4">
        <label for="cidade">Cidade</label>
        <select id="cidade" class="form-control">
          <option selected>Rio Branco</option>
          <option value="Maceió">Maceió</option>
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
        <label for="contato">Contato</label>
        <input type="text" class="form-control" id="contato" placeholder="Contato"
        name="contato" value="{{$clinicas->contato ?? ''}}">
      </div>

      <div class="form-group col-md-12">
        <label for="complemento">Complemento</label>
        <input type="text" class="form-control" id="complemento" placeholder="Complemento"
        name="complemento" value="{{$clinicas->complemento ?? ''}}">
      </div>

      <div class="input-group is-invalid">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="validatedInputGroupCustomFile" required>
          <label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label>
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
  
  <input class="btn btn-primary" type="submit" value="@if(isset($clinicas))Editar @else Cadastrar @endif">

</form>


@endsection