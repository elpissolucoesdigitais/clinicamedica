@extends('templates.template')

@section('content')

<!-- Página do crud  -->
<div id="content" class="p-4 p-md-5 pt-5">
  <h1 class="text-center">Consulta {{$consulta->nome}} </h1><hr>
  @php
      //$clinica=$agenda->find($agenda->id)->relclinicas;
  @endphp
        <div class="col-8 m-auto">
            <form>
                <fieldset disabled>
                    <div class="form-group col-md-12">
                        @php
                            $medico=$consulta->find($consulta->id)->relMedico;
                        @endphp
            
                        <label for="nomemedico">Medico</label>
                        <input type="text" class="form-control" id="nomemedico" name="nomemedico" value="{{$medico->nome}}">
                    </div>    
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            @php
                            $procedimento=$consulta->find($consulta->id)->relProcedimento;
                        @endphp
            
                        <label for="fk_procedimento">Procedimento</label>
                        <input type="text" class="form-control" id="fk_procedimento" name="fk_procedimento" value="{{$procedimento->nome}}">
                    </div>
                
        </div>
              
        
        <div class="form-group">
            <label for="hora">Hora da consulta</label>
            <input type="text" class="form-control" id="hora" name="hora" value="{{$consulta->hora}}">
        </div>
        <div class="form-row">
            <div class="form-group ">
                <label for="data">Data da consulta</label>
                <input type="text" class="form-control" id="data" name="data" value="{{$consulta->data}}">
            </div>
            
        <div class="form-group col-md-2">
              <label for="valor">Valor R$</label>
              <input type="text" class="form-control" id="valor" name="valor" value="{{$consulta->valor}}">
        </div>
        <div class="form-group col-md-2">
              <label for="status">Status</label>
              <input type="text" class="form-control" id="status" name="status" value="{{$consulta->status}}">
        </div>
        <div class="form-group col-md-3">
              <label for="criado">Criado</label>
              <input type="text" class="form-control" id="criado" name="criado" value="{{$consulta->created_at}}">
        </div>
    </div>  


    <div class="form-group">
      <label for="updated_at">Ultima Atualização</label>
      <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{$consulta->updated_at}}">
    </div>

        </fieldset>  
        </form>
  </div> 
  <form action="{{route('consulta.destroy', $consulta->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Deletar a Consulta: {{$consulta->fk_medico}}</button>
    </form>
  @endsection