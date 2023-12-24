@extends('templates.template')
@section('content')


<header class="h1-relatorio" >
    <div style="display: flex;">
        <a href="{{route('relatorio.index')}}" >
            <img src="{{asset('images/left.png')}}" alt="btn-voltar" class="btn-voltar">
        </a>
    </div>

    <h1 >Lista de Produtos</h1>
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
        <div class="col-8 m-auto">

            <table class="table table-bordered table-striped table-hover table-light table-sm">
                <caption>Lista de produtos</caption>
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOME</th>
                        <th scope="col">PREÇO</th>
                        <th scope="col">AÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <th>{{$produto->id}}</th>
                        <td>{{$produto->nome}}</td>
                        <td>{{number_format($produto->preco,2 ,",")}}</td>

                        <td class="d-flex" >
                            <a href="{{route('produtos.show', $produto->id)}}">
                                <button type="button" class="btn btn-dark me-3">Visualizar</button>
                            </a>

                            <a href="{{route('produtos.edit', $produto->id)}}">
                                <button type="button" class="btn btn-primary me-3">
                                    <i class="fa-solid fa-user"></i>
                                    Editar</button>
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
