@extends('templates.template')

@section('content')

@if(isset($errors) && count($errors)>0)
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach ($errors->all() as $erro)
          {{$erro}}<br>
        @endforeach
    </div>
  @endif
  @if (isset($procedimento))
  <form class="col-6 m-auto" action="{{url("clinica/$clinica->id")}}" name="formEdit" id="formEdit" method="POST">
      @method('PUT')
  @else
  <form class="col-6 m-auto" action="{{url('clinica')}}" name="formCad" id="formCad" method="POST">

  @endif
  @csrf

<form class="col-6 m-auto">
  <h1 class="text-center">@if(isset($clinica))Editar @else Cadastrar @endif</h1><hr>

  <div class="form-row">
    <div class="form-group col-md-6">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Email" name="email"
        value="{{$clinica->email ?? ''}}">
      </div>
    <div class="form-group col-md-6">
      <label for="senha">Senha</label>
      <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha"
      value="{{$clinica->senha ?? ''}}">
    </div>
  </div>
  


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="longradouro">Longradouro</label>
      <input type="text" class="form-control" id="longradouro" placeholder="Longradouro" name="longradouro"
      value="{{$clinica->logradouro ?? ''}}">
    </div>

    <div class="form-group col-md-6">
        <label for="bairro">Bairro</label>
        <input type="text" class="form-control" id="bairro" placeholder="Bairro" name="bairro"
        value="{{$clinica->bairro ?? ''}}">
      </div>


      <div class="form-group col-md-6">
        <label for="cep">CEP</label>
        <input type="integer" class="form-control" id="cep" placeholder="CEP" name="cep"
        value="{{$clinica->cep ?? ''}}">
      </div>

    <div class="form-group col-md-4">
      <label for="uf">UF</label>
      <select id="uf"  name="uf" class="form-control">
        <option selected>RO</option>
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
        <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome"
        value="{{$clinica->nome ?? ''}}">
      </div>

      <div class="form-group col-md-7">
        <label for="cnpj">CNPJ</label>
        <input type="text" class="form-control" id="cnpj" placeholder="CNPJ" name="cnpj"
        value="{{$clinica->cnpj ?? ''}}">
      </div>

      <div class="form-group col-md-6">
        <label for="numero">Numero</label>
        <input type="integer" class="form-control" id="numero" placeholder="Numero" name="numero"
        value="{{$clinica->numero ?? ''}}">
      </div>

      <div class="form-group col-md-6">
        <label for="responsavelTecnico">Responsavel Tecnico</label>
        <input type="text" class="form-control" id="responsaveltecnico" placeholder="Responsavel Tecnico"
        name="responsaveltecnico" value="{{$clinica->responsaveltecnico ?? ''}}">
      </div>

      <div class="form-group col-md-4">
        <label for="cidade">Cidade</label>
        <select id="cidade" name="cidade" class="form-control">
          <option selected>Rio Branco</option>
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
        name="contato" value="{{$clinica->contato ?? ''}}">
      </div>

      <div class="form-group col-md-12">
        <label for="complemento">Complemento</label>
        <input type="text" class="form-control" id="complemento" placeholder="Complemento"
        name="complemento" value="{{$clinica->complemento ?? ''}}">
      </div>

      <div class="input-group is-invalid">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="validatedInputGroupCustomFile"  name="foto" required>
          <label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label>
        </div>

  </div>
  
  
  

</form>

<input class="btn btn-primary" type="submit" value="@if(isset($clinica))Editar @else Cadastrar @endif">

<a href="{{url('clinica')}}">
  <button class="btn btn-primary">Voltar</button>
</a>


@endsection