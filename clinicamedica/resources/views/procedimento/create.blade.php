@extends('templates.template')

@section('content')
<h1 class="text-center">@if(isset($procedimento))Editar @else Cadastrar @endif</h1><hr>
<a href="{{url('procedimento')}}">
    <button class="btn btn-primary">Voltar</button>
</a>
<div class="col-8 m-auto">

        @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach ($errors->all() as $erro)
                   {{$erro}}<br>
                @endforeach
            </div>
        @endif
        @if (isset($procedimento))
        <form action="{{url("procedimento/$procedimento->id")}}" name="formEdit" id="formEdit" method="POST">
            @method('PUT')
        @else
        <form action="{{url('procedimento')}}" name="formCad" id="formCad" method="POST">

        @endif
        @csrf
        <input class="form-control" type="text" name="id" id="id" placeholder="id" 
        value="{{$procedimento->id ?? ''}}" require>

       
        <input class="form-control" type="text" name="nome" id="nome" placeholder="nome do procedimento"
         value="{{$procedimento->nome ?? ''}}" require>
        <input class="form-control" type="text" name="fk_secretaria" id="fk_secretaria" placeholder="" value="{{$procedimento->fk_secretaria ?? ''}}" require>
        <input class="form-control" type="text" name="Valor" id="Valor" placeholder="Valor" value="{{$procedimento->valor ?? ''}}" require>
        <input class="btn btn-primary" type="submit" value="@if(isset($procedimento))
        Editar @else Cadastrar @endif">

    </form>
</div>
@endsection