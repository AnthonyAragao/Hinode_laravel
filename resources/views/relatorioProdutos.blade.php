@extends('templates.template')
@section('content')

<header>
    <h1 class="text-center">Lista de Produtos</h1>
</header>

@if(session('msg'))
    <div class="alert alert-success text-center" role="alert">
        {{session('msg')}}
    </div>
@endif

<div class="text-center mt-5 mb-3">
    <a href="{{route('produtos.create')}}">
        <button type="button" class="btn btn-outline-success btn-lg btn-lg">Novo Produto</button></a>
</div>

<div class="container">
    <div class="row">
        <div class="col-6 m-auto">
            <table class="table text-center">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Preço</th>
                        <th scope="col">. . .</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <th scope="row">{{$produto->id}}</th>
                        <td>{{$produto->nome}}</td>
                        <td>{{$produto->preco}}</td>

                        <td class="d-flex ">
                            <a href="{{route('produtos.show', $produto->id)}}">
                                <button type="button" class="btn btn-dark me-2">Visualizar</button>
                            </a>

                            <a href="{{route('produtos.edit', $produto->id)}}">
                                <button type="button" class="btn btn-primary me-2">Editar</button>
                            </a>

                            <form action="{{route('produtos.destroy', $produto->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
