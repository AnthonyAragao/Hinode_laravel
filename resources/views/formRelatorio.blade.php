@extends('templates.template')
@section('content')

<header>
    <h1 class="text-center mt-5 mb-5">
        @if(isset($relatorio))Editar Relatorio @else Relatorio @endif
    </h1> <hr>
</header>

<div class="col-md-6 offset-md-3">
    <form name="formCad" id="formCad" method="POST" action="{{route('relatorio.store')}}">
        @csrf
        <input class="form-control mt-4" type="text" name="nome" id="nome" placeholder="Nome: "
        value=""> <br>

        <input class="form-control " type="text" name="valor_pago" id="valor_pago" placeholder="Valor pago: "
        value=""> <br>


        <input class="form-control" type="text" name="data_compra" id="data_compra" placeholder="Data da compra: "
        value=""> <br>

        <input class="form-control" type="text" name="descricao" id="descricao" placeholder="Descrição da venda: "
        value=""> <br>

        <select class="form-control" name="produto_id" id="produto_id">
            <option value="">Produto:</option>
            @foreach ($produtos as $produto)
                <option value="{{$produto->id}}">{{$produto->nome}}</option>
            @endforeach
        </select> <br>

        <input class="btn btn-primary " type="submit" value="@if(isset($relatorio))Editar @else Cadastrar @endif">
    </form>
</div>


@endsection
