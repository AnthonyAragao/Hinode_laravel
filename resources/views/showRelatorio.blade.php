@extends('templates.template')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



<h1 class="text-center mt-5 mb-5">Visualizar</h1> <hr>

<div class="col-md-6 offset-md-3">
    @php
        $produto = $produtos->find($relatorio->produto_id);
        $saldoDevedor = $produto->preco - $relatorio->valor_pago;
    @endphp

    Nome: {{$relatorio->nome}} <hr>
    Data da compra: {{$relatorio->data_compra}} <hr>
    Produto comprado: {{$produto->nome}} <hr>
    Valor do produto: {{number_format($produto->preco, 2, ",")}} <hr>
    Valor pago: {{number_format($relatorio->valor_pago, 2, ",")}} <hr>
    Saldo devedor: {{number_format($saldoDevedor, 2, ",")}} <hr>
    Descrição da compra: {{$relatorio->descricao}} <hr>

</div>


@endsection
