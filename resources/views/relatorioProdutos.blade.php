@extends('templates.template')
@section('content')

<header>
    <h1 class="text-center">Lista de Produtos</h1>
</header>

<div class="text-center mt-4 mb-2">
    <a href="{{route('produtos.create')}}">
        <button type="button" class="btn btn-success">Novo Produto</button></a>
</div>


<div class="col-8 m-auto">
    <table class="table text-center">
        <thead class="table-dark">
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Preço</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($produtos as $produto)
        <tr>
            <th scope="row">{{$produto->id}}</th>
            <td>{{$produto->nome}}</td>
            <td>{{$produto->preco}}</td>
            <td>
                <a href="{{route('produtos.show', $produto->id)}}">
                    <button type="button" class="btn btn-dark">Visualizar</button>
                </a>
                <a href="{{route('produtos.edit', $produto->id)}}">
                    <button type="button" class="btn btn-primary">Editar</button>
                </a>
                <a href="">
                    <button type="button" class="btn btn-danger">Deletar</button>
                </a>
            </td>
        </tr>

        @endforeach
        </tbody>
        </table>
</div>

@endsection
