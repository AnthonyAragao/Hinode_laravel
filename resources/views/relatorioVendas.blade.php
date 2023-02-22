@extends('templates.template')
@section('content')
<header>
    <h1 class="text-center mt-5">Relatorio de vendas</h1>
</header>

<div class="text-center mt-5 mb-3">
    <a href="{{route('relatorio.create')}}">
        <button type="button" class="btn btn-outline-info btn-lg">Nova venda</button>
    </a>
    <a href="{{route('produtos.index')}}">
        <button type="button" class="btn btn-outline-dark btn-lg">Produtos cadastrados</button>
    </a>
</div>



<div class="col-12 m-auto">
    <table class="table table-striped table-dark text-center">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">. . .</th>
            </tr>
        </thead>

        <tbody>
        @foreach ($relatorio_vendas as $relatorio)
            <tr>
                <th scope="row">{{$relatorio->id}}</th>
                <th scope="row">{{$relatorio->nome}}</th>
                <td>
                    <a href="{{route('relatorio.show', $relatorio->id)}}">
                        <button type="button" class="btn btn-dark">Visualizar</button>
                    </a>
                    <a href="{{route('relatorio.edit', $relatorio->id)}}">
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
