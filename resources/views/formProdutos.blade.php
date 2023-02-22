@extends('templates.template')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<header>
    <h1 class="text-center mt-5 mb-5">
        @if(isset($produto))Editar Produto
        @else Cadastrar Produto
        @endif
    </h1> <hr>
</header>

@if(isset($produto))
    <form name="formEdit" id="formEdit" method="POST" action="{{route('produtos.update', $produto->id)}}">
        @method('PUT')
@else
    <form name="formCad" id="formCad" method="POST" action="{{route('produtos.store')}}">
@endif
@csrf

<div class="col-md-6 offset-md-3">
    <form name="formCad" id="formCad" method="POST" action="{{route('produtos.store')}}">
        @csrf
        <input class="form-control mt-4" type="text" name="nome" id="nome" placeholder="Nome: "
        value="{{$produto->nome??''}}"> <br>

        <input class="form-control mt-2 mb-2" type="text" name="preco" id="preco" placeholder="Preço: "
        value="{{$produto->preco??''}}"> <br>

        <input class="btn btn-primary " type="submit" value="@if(isset($produto))Editar @else Cadastrar @endif">
    </form>
</div>

@endsection
