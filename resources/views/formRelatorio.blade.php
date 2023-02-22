@extends('templates.template')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<header>
    <h1 class="text-center mt-5 mb-5">
        @if(isset($relatorio))Editar Relatorio @else Relatorio @endif
    </h1> <hr>
</header>

@if(isset($relatorio))
    <form name="formEdit" id="formEdit" method="POST" action="{{route('relatorio.update', $relatorio->id)}}">
        @method('PUT')
@else
    <form name="formCad" id="formCad" method="POST" action="{{route('relatorio.store')}}">
@endif


<div class="col-md-6 offset-md-3">
    <form name="formCad" id="formCad" method="POST" action="{{route('relatorio.store')}}">
        @csrf
        <input class="form-control mt-4" type="text" name="nome" id="nome" placeholder="Nome: "
        value="{{$relatorio->nome??''}}"> <br>

        <input class="form-control " type="text" name="valor_pago" id="valor_pago" placeholder="Valor pago: "
        value="{{$relatorio->valor_pago??''}}"> <br>


        <input class="form-control" type="text" name="data_compra" id="data_compra" placeholder="Data da compra: "
        value="{{$relatorio->data_compra??''}}"> <br>

        <input class="form-control" type="text" name="descricao" id="descricao" placeholder="Descrição da venda: "
        value="{{$relatorio->descricao??''}}"> <br>

        <select class="form-control" name="produto_id" id="produto_id">
            <option value="{{$relatorio->produtoRelationship->id??''}}">{{$relatorio->produtoRelationship->nome??'Produto:'}}</option>
            @foreach ($produtos as $produto)
                <option value="{{$produto->id}}">{{$produto->nome}}</option>
            @endforeach
        </select> <br>

        <input class="btn btn-primary " type="submit" value="@if(isset($relatorio))Editar @else Cadastrar @endif">
    </form>
</div>


@endsection
