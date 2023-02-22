@extends('templates.template')
@section('content')
<header>
    <h1 class="text-center mt-5 mb-5">Cadastrar Produto</h1>
</header>

<div class="col-md-6 offset-md-3">
    <form name="formCad" id="formCad" method="POST" action="{{route('produtos.store')}}">
        @csrf
        <input class="form-control mt-4" type="text" name="nome" id="nome" placeholder="Nome: ">
        <input class="form-control mt-4 mb-4" type="text" name="preco" id="preco" placeholder="Preço: ">

        <input class="btn btn-primary " type="submit" value="Cadastrar">

    </form>
</div>

@endsection
