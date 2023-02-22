@extends('templates.template')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<h1 class="text-center mt-5 mb-5">Visualizar</h1> <hr>

<div class="col-md-6 offset-md-3">
    Nome: {{$produto->nome}} <br>
    Preco: {{number_format($produto->preco,2 ,",")}} <br>
</div>

@endsection
