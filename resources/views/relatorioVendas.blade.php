@extends('templates.template')
@section('content')

<h1 class="text-center mt-3">Hinode do Querido</h1>

@if(session('msg'))
    <div class="alert alert-success text-center role="alert">
        {{session('msg')}}
    </div>
@endif

<div class="text-center mt-3 mb-5">
    <a href="{{route('relatorio.create')}}">
        <button type="button" class="btn btn-outline-info btn-lg">Nova venda</button>
    </a>
    <a href="{{route('produtos.index')}}">
        <button type="button" class="btn btn-outline-dark btn-lg">Produtos cadastrados</button>
    </a>
</div>

<h2 class="text-center mt-3">Relatorio de vendas</h2>

<div class="col-4 m-auto">
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
                <td class="d-flex">
                    <a href="{{route('relatorio.show', $relatorio->id)}}">
                        <button type="button" class="btn btn-dark me-2">Visualizar</button>
                    </a>

                    <a href="{{route('relatorio.edit', $relatorio->id)}}">
                        <button type="button" class="btn btn-primary me-2">Editar</button>
                    </a>

                    <form action="{{route('relatorio.destroy', $relatorio->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Deletar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
