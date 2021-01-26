@extends('templates.template')

@section('content')



<!-- Página do crud  -->
<div id="content" class="p-4 p-md-5 pt-5">
  <h1 class="text-center">Paciente {{$paciente->nome}} </h1><hr>
  @php
      //$paciente=$agenda->find($agenda->id)->relPacientes;
  @endphp
  <div class="col-8 m-auto">
      <form>
        <fieldset disabled>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="nomePaciente">Nome Paciente</label>
              <input type="text" class="form-control" id="nomePaciente" name="nomePaciente" value="{{$paciente->nome}}">
            </div>
           
          </div>
          <div class="form-row">
              <div class="form-group ">
              <label for="rg">RG</label>
              <input type="text" class="form-control" id="rg" name="rg" value="{{$paciente->rg}}">
              </div>
              <div class="form-group col-md-2">
                  <label for="dataNascimento">Nascimento</label>
                  <input type="text" class="form-control" id="dataNascimento" name="dataNascimento" value="{{$paciente->dataNascimento}}">
              </div>
              <div class="form-group col-md-7">
                  <label for="cpf">CPF</label>
                  <input type="text" class="form-control" id="cpf" name="cpf" value="{{$paciente->cpf}}">
              </div>
          </div>
          <div class="form-group">
            <label for="sexo">Sexo</label>
            <input type="text" class="form-control" id="sexo" name="sexo" value="{{$paciente->sexo}}">
          </div>
          <div class="form-row">
            <div class="form-group ">
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
            
            <div class="form-group col-md-2">
              <label for="bairro">Bairro</label>
              <input type="text" class="form-control" id="bairro" name="bairro" value="{{$paciente->bairro}}">
            </div>
            <div class="form-group col-md-2">
              <label for="cep">Cep</label>
              <input type="text" class="form-control" id="cep" name="cep" value="implementar">
            </div>
            <div class="form-group col-md-2">
              <label for="contato">Contato</label>
              <input type="text" class="form-control" id="contato" name="contato" value="{{$paciente->contato}}">
            </div>
            <div class="form-group col-md-3">
              <label for="criado">Criado</label>
              <input type="text" class="form-control" id="criado" name="criado" value="{{$paciente->created_at}}">
            </div>
            <div class="form-group col-md-3">
              <label for="altura">Altura</label>
              <input type="text" class="form-control" id="altura" name="altura" value="{{$paciente->altura}}">
            </div>
            <div class="form-group col-md-3">
              <label for="pressao">Pressão Arterial</label>
              <input type="text" class="form-control" id="pressao" name="pressao" value="{{$paciente->pressao}}">
            </div>
            
          </div>
          
          <div class="form-row">
            <div class="form-group">
              <label for="numero">Numero</label>
              <input type="text" class="form-control" id="numero" name="numero" value="{{$paciente->numero}}">
            </div>

            <div class="form-group col-md-3">
              <label for="uf">UF</label>
              <input type="text" class="form-control" id="uf" name="uf" value="{{$paciente->uf}}">
            </div>
            <div class="form-group col-md-3">
              <label for="peso">Peso</label>
              <input type="text" class="form-control" id="peso" name="peso" value="{{$paciente->peso}}">
            </div>

          </div>

          <div class="form-group">
            <label for="longradouro">Longradouro</label>
            <input type="text" class="form-control" id="longradouro" name="longradouro" value="{{$paciente->longradouro}}">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{$paciente->email}}">
          </div>

          <div class="form-group">
            <label for="foto">Foto do Paciente</label>
            <input type="text" class="form-control" id="foto" name="foto" value="{{$paciente->foto}}">
          </div>

          <div class="form-group">
            <label for="nomepai">Nome do Pai</label>
            <input type="text" class="form-control" id="nomepai" name="nomepai" value="{{$paciente->nomepai}}">
          </div>

          <div class="form-group">
            <label for="nomemae">Nome da Mãe</label>
            <input type="text" class="form-control" id="nomemae" name="nomemae" value="{{$paciente->nomemae}}">
          </div>

          <div class="form-group">
            <label for="complemento">Complemento</label>
            <input type="text" class="form-control" id="complemento" name="complemento" value="{{$paciente->complemento}}">
          </div>

          <div class="form-group">
            @php
                $convenio=$paciente->find($paciente->id)->relConvenio;
            @endphp
            
            <label for="nomeconvenio">Convenio</label>
            <input type="text" class="form-control" id="nomeconvenio" name="nomeconvenio" value="{{$convenio->nome}}">
          </div>

          <div class="form-group">
            <label for="updated_at">Ultima Atualização</label>
            <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{$paciente->updated_at}}">
          </div>

        </fieldset>  
        </form>
  </div> 
  @endsection