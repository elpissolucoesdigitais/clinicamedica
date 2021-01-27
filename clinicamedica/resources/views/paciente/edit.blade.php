@extends('templates.template')

@section('content')
  
  @if(isset($errors) && count($errors)>0)
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach ($errors->all() as $erro)
          {{$erro}}<br>
        @endforeach
    </div>
  @endif
  @if (isset($paciente))
  <form class="col-6 m-auto" action="{{url("paciente/$paciente->id")}}" name="formEdit" id="formEdit" method="POST">
      @method('PUT')
  @else
  <form class="col-6 m-auto" action="{{url('paciente')}}" name="formCad" id="formCad" method="POST">

  @endif
  @csrf
  <h1 class="text-center">@if(isset($paciente))Editar @else Cadastrar @endif</h1><hr>
  <p>Dados Pessoais:</p>
    <div class="form-row">

      <div class="form-group col-md-6">
        <label for="email">Email</label>
        <input type="email" class="form-control" placeholder="Email" id="email" name="email" value="{{$paciente->email ?? ''}}">
      </div>

      <div class="form-group col-md-6">
        <label for="senha">Senha</label>
        <input type="password" class="form-control" placeholder="Senha" id="senha" name="senha" value="{{$paciente->senha ?? ''}}">
      </div>

      <div class="form-group col-md-6">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" placeholder="Nome" id="nome" name="nome" value="{{$paciente->nome ?? ''}}">
      </div>
      <div class="form-group col-md-6">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" placeholder="CPF" id="cpf" name="cpf" value="{{$paciente->cpf?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="rg">RG</label>
        <input type="text" class="form-control" placeholder="RG" id="rg" name="rg" value="{{$paciente->rg ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="altura">Altura</label>
        <input type="double" class="form-control" placeholder="Altura" id="altura" name="altura" value="{{$paciente->altura ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="pressao">Pressão Arterial</label>
        <input type="double" class="form-control" placeholder="Pressão" id="pressao" name="pressao" value="{{$paciente->pressao ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="peso">Peso</label>
        <input type="double" class="form-control" placeholder="Peso" id="peso" name="peso" value="{{$paciente->peso ?? ''}}">
    </div>
    <div class="form-group col-md-8">
        <label for="contato">Contato</label>
        <input type="text" class="form-control" placeholder="Contato" id="contato" name="contato" value="{{$paciente->contato ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="nomepai">Nome do Pai</label>
        <input type="text" class="form-control" placeholder="Nome do Pai" id="nomepai" name="nomepai" value="{{$paciente->nomepai ?? ''}}">
    </div>

    <div class="form-group col-md-6">
      <label for="nomemae">Nome da Mãe</label>
      <input type="text" class="form-control" placeholder="Nome da Mãe" id="nomemae" name="nomemae" value="{{$paciente->nomemae ?? ''}}">
    </div>
    
    <div class="form-group col-md-6">
        <label for="complemento">Complemento</label>
        <input type="text" class="form-control" placeholder="Complemento" id="complemento" name="complemento" value="{{$paciente->complemento ?? ''}}">
    </div>
    
    
    <div class="form-group col-md-6">
        <label for="cep">Cep</label>
        <input type="text" class="form-control" placeholder="CEP" id="cep" name="cep" value="{{$paciente->cep ?? ''}}">
    </div>
    <div class="form-group col-md-6">
      <label for="cidade">Cidade</label>
      <select id="cidade" name="cidade" class="form-control">
        <option selected>{{$paciente->cidade ??''}}</option>
        <option value="Rio Branco">Rio Branco</option>
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
    <div class="form-group col-md-6">
        <label for="bairro">Bairro</label>
        <input type="text" class="form-control" placeholder="Bairro" id="bairro" name="bairro" value="{{$paciente->bairro ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="longradouro">Logradouro</label>
        <input type="text" class="form-control" placeholder="Logradouro" id="longradouro" name="longradouro" value="{{$paciente->longradouro ?? ''}}">
    </div>

    <div class="form-group col-md-6">
      <label for="numero">Numero</label>
      <input type="number" class="form-control" placeholder="Numero" id="numero" name="numero" value="{{$paciente->numero ??''}}">
  </div>
    
    <div class="form-group col-md-6">
      <label for="uf">UF</label>
      <select id="uf" name="uf" class="form-control">
        <option selected>{{$paciente->uf ??''}}</option>
        <option value="RO">RO</option>
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
    <div class="form-group col-md-6">
        <label for="datanascimento">Data Nascimento</label>
        <input type="date" class="form-control" id="datanascimento" name="datanascimento" value="{{$paciente->data_nascimento ??''}}">
    </div>
    <div class="form-group col-md-4">
        <label for="sexo">Sexo</label>
        <select id="sexo" name="sexo" class="form-control">
          <option selected>{{$paciente->sexo ??''}}</option>
          <option value="Masculino">Masculino</option>
          <option value="Feminino">Feminino</option>
        </select>
      </div>

      <div class="form-group col-md-6">
        <label for="nomeconvenio">Convenio</label>
        <select class="form-control" type="text" name="nomeconvenio" id="nomeconvenio">
          <option value="{{$paciente->relConvenio->id ?? ''}}">{{$paciente->relConvenio->nome ?? ''}}</option>
          @foreach ($convenio as $convenios)
            <option value="{{$convenios->id}}">{{$convenios->nome}}</option>
          @endforeach
  
        </select>
        </div>


    <div class="input-group is-invalid">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="foto"  name="foto" >
          <label class="custom-file-label" for="foto">Envie uma foto</label>
        </div><br>
    
    <input class="btn btn-primary" type="submit" value="@if(isset($paciente))Editar @else Cadastrar @endif"> 
  </form>
  <a href="{{url('paciente')}}">
    <button class="btn btn-primary">Voltar</button>
</a>
  @endsection