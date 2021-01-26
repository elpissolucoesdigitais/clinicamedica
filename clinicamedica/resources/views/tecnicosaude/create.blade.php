@extends('templates.template')

@section('content')
  
  @if(isset($errors) && count($errors)>0)
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach ($errors->all() as $erro)
          {{$erro}}<br>
        @endforeach
    </div>
  @endif
  @if (isset($tecnicoSaude))
  <form class="col-6 m-auto" action="{{url("tecnicosaude/$tecnicoSaude->id")}}" name="formEdit" id="formEdit" method="POST">
      @method('PUT')
  @else
  <form class="col-6 m-auto" action="{{url('tecnicosaude')}}" name="formCad" id="formCad" method="POST">

  @endif
  @csrf
  <h1 class="text-center">@if(isset($tecnicoSaude))Editar @else Cadastrar @endif</h1><hr>
  <p>Dados Pessoais:</p>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" placeholder="Nome" id="nome" name="nome" value="{{$tecnicoSaude->nome ?? ''}}">
      </div>
      <div class="form-group col-md-6">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" placeholder="CPF" id="cpf" name="cpf" value="{{$tecnicoSaude->cpf?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="rg">RG</label>
        <input type="text" class="form-control" placeholder="RG" id="rg" name="rg" value="{{$tecnicoSaude->rg ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="especialidade">especialidade</label>
        <input type="text" class="form-control" placeholder="Especialidade" id="especialidade" name="especialidade" value="{{$tecnicoSaude->especialidade ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="contato">contato</label>
        <input type="text" class="form-control" placeholder="Contato" id="contato" name="contato" value="{{$tecnicoSaude->contato ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="salario">Salario</label>
        <input type="text" class="form-control" placeholder="Salario" id="salario" name="salario" value="{{$tecnicoSaude->salario ?? ''}}">
    </div>
    
    <div class="form-group col-md-6">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" placeholder="Email" id="email" name="email" value="{{$tecnicoSaude->email ?? ''}}">
    </div>
    
    <div class="form-group col-md-6">
        <label for="complemento">Complemento</label>
        <input type="text" class="form-control" placeholder="Complemento" id="complemento" name="complemento" value="{{$tecnicoSaude->complemento ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="cep">Cep</label>
        <input type="text" class="form-control" placeholder="CEP" id="cep" name="cep" value="{{$tecnicoSaude->cep ?? ''}}">
    </div>
    <div class="form-group col-md-6">
      <label for="cidade">Cidade</label>
      <select id="cidade" name="cidade" class="form-control">
        <option selected>{{$tecnicoSaude->cidade ??''}}</option>
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
        <input type="text" class="form-control" placeholder="Bairro" id="bairro" name="bairro" value="{{$tecnicoSaude->bairro ?? ''}}">
    </div>
    <div class="form-group col-md-6">
        <label for="longradouro">Logradouro</label>
        <input type="text" class="form-control" placeholder="Logradouro" id="longradouro" name="longradouro" value="{{$tecnicoSaude->longradouro ?? ''}}">
    </div>
    <!--Error: não envia para o banco-->
    <div class="form-group col-md-6">
      <label for="uf">UF</label>
      <select id="uf" name="uf" class="form-control">
        <option selected>{{$tecnicoSaude->uf ??''}}</option>
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
    <div class="input-group is-invalid">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="foto"  name="foto" >
          <label class="custom-file-label" for="foto">Envie uma foto</label>
        </div><br>
    
    <input class="btn btn-primary" type="submit" value="@if(isset($tecnicoSaude))Editar @else Cadastrar @endif"> 
  </form>
  <a href="{{url('tecnicosaude')}}">
    <button class="btn btn-primary">Voltar</button>
</a>
  @endsection