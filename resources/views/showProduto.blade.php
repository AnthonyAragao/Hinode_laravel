@extends('templates.template')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div style="display: flex;">
    <a href="{{ route('produtos.index') }}">
        <img src="{{ asset('images/left.png') }}" alt="btn-voltar" class="btn-voltar">
    </a>
</div>

<h1 class="text-center mt-4 mb-5">Visualizar</h1> <hr>

<div class="alinhamento-show" style="width: 450px; margin-top: 7rem;">
    Nome: {{$produto->nome}} <br>
    Preco: {{number_format($produto->preco,2 ,",")}} <br>
</div>

@endsection
