@extends('templates.template')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <div style="display: flex;">
        <a href="{{ route('relatorio.index') }}">
            <img src="{{ asset('images/left.png') }}" alt="btn-voltar" class="btn-voltar">
        </a>
    </div>

    <h1 class="text-center mt-5 mb-5">Visualizar</h1>

    <div class="alinhamento-show">
        @php
            $produto = $produtos->find($relatorio->produto_id);
            $saldoDevedor = $produto->preco - $relatorio->valor_pago;
        @endphp

        Nome: {{ $relatorio->nome }} <br>
        Data da compra: {{ $relatorio->data_compra }} <br>
        Produto comprado: {{ $produto->nome }} <br>
        Valor do produto: {{ number_format($produto->preco, 2, ',') }} <br>
        Valor pago: {{ number_format($relatorio->valor_pago, 2, ',') }} <br>
        Saldo devedor: {{ number_format($saldoDevedor, 2, ',') }} <br>
        Descrição da compra: {{ $relatorio->descricao }} <br>

    </div>
@endsection
